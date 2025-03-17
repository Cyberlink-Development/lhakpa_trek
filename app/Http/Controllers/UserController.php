<?php

namespace App\Http\Controllers;

use App\Models\Inquiry\BookingModel;
use App\Models\Travels\TripModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use App\User;

class UserController extends Controller
{
    public function user_profile(Request $request)
    {
        if($request->isMethod('get')){
            return view('themes.default.user.profile');     
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $request->validate(
                [
                    'name' => 'required',
                    'phone'=>'required',
                    'address'=>'required',
                ]);
                $id = $request->user_id;
                $find = User::find($id)->update([
                    'name' => $request->name,  
                    'address' => $request->address,
                    'email' => $request->email,
                    'phone' => $request->phone, 
                    'roles' => 'user',
                ]);
                $user = User::find($id);
                if ($request->hasFile('imageProfile')) {              
                    if(isset($user->image)){ 
                        if(file_exists('user-profile/' . $user->image)){
                            unlink('user-profile/' . $user->image);
                            }        
                    }
                    $image = $request->file('imageProfile');
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('user-profile');
                    $image->move($destinationPath, $name);
                    $user->image = $name;
                    $user->save();    
                } 
            }
            if ($find) {
                return redirect()->back()->with('success', 'User profile updated');        
        }
    }
    public function user_history()
    {
        $data=BookingModel::orderBy('id','desc')->paginate(3);
        return view('themes.default.user.history',compact('data'));  
    }
    public function user_recommendation()
    {
        return view('themes.default.user.recommendation');  
    }  
     public function user_wishlist(Request $request)
    {
        if ($request->isMethod('get')) {
            if (Auth::check() && (Auth::user()->roles == 'user') ){
                $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
                $trip_ids=$wishlist->pluck('trip_id');
                $data=TripModel::whereIn('id',$trip_ids)->paginate(3);
                return view('themes.default.user.wishlist', compact('wishlist','data'));
            }
            else{ 
                return back()->with('error','Please login first');
            }
        }    
    }   
    
    public function user_review()
    {
        return view('themes.default.user.review');  
    }

    public function add_wishlist($id)
    {
        if ($_GET) {
            if (Auth::check() && Auth::user() && (Auth::user()->roles == 'user')) {
                $old_wishlist = Wishlist::where('trip_id', $id)->where('user_id', Auth::user()->id)->first();
                if ($old_wishlist != null) {
                    return response()->json(['status'=>'error', 'message'=>'Trip already added to wishlist.']);
                } else {
                    $list = new Wishlist();
                    $list->user_id = Auth::user()->id;
                    $list->trip_id = $id;
                    $list->save();
                    return response()->json(['status'=>'success', 'message'=>'Trip added to wishlist.']);
                }
                
            }else{
                return response()->json(['status'=>'error', 'message'=>'Please login first!.']);
            }
        }
    }

    public function delete_wishlist(Request $request)
    {
        $find = Wishlist::where('trip_id',$request->id)->first();
        $find->delete();
        return back()->with('success', 'Trip removed from wishlist');
    }
}

