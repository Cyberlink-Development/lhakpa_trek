<?php

namespace App\Http\Controllers;

use App\Model\TripReview;
use App\Models\Inquiry\BookingModel;
use App\Models\Travels\TripGearModel;
use App\Models\Travels\TripModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use App\User;
use App\Models\Travels\TripsTag;


class UserController extends Controller 
{
    public function user_profile(Request $request)
    {
        if($request->isMethod('get')){
            $tripsTags = TripsTag::all();
            $selectedTags = auth()->user()->tags->pluck('id')->toArray(); // Fetch user's selected tags
            return view('themes.default.user.profile',compact('tripsTags','selectedTags'));     
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

                if (isset($request->tags) && !empty($request->tags)) {
                    $user->tags()->sync($request->tags);
                } else {
                    $user->tags()->detach();
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
        if (Auth::check() && (Auth::user()->roles == 'user') ){
    $user = auth()->user(); // Get logged-in user
    $userTags = $user->tags()->pluck('tag_id'); // Get user preference tags
    if (empty($userTags)) {
        return TripModel::all(); // If no preferences, return all trips
    }
    // Get trips where tags intersect with user tags 
    $data = TripModel::whereHas('tripTags', function ($query) use ($userTags) {
        $query->whereIn('cl_trip_tags_rel.trip_tag_id', $userTags);
    })->distinct()->paginate(3);
     return view('themes.default.user.recommendation',compact('data'));  
    }  
    else{ 
        return redirect()->route('login.form')->with('error','Please login first');
    }
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
                return redirect()->route('login.form')->with('error','Please login first');
            }
        }    
    }   
    
    public function user_review()
    {
        if (Auth::check() && (Auth::user()->roles == 'user') ){
            $data = TripReview::where('user_id', Auth::user()->id)->paginate(2);
            return view('themes.default.user.review', compact('data'));  
        }
        else{
            return redirect()->route('login.form')->with('error','Please login first');
        }
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

