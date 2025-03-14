<?php

namespace App\Http\Controllers;

use App\Models\Travels\TripModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class UserController extends Controller
{
    public function user_profile()
    {
        return view('themes.default.user.profile');  
    }
    public function user_history()
    {
        return view('themes.default.user.history');  
    }
    public function user_recommendation()
    {
        return view('themes.default.user.recommendation');  
    }  
     public function user_wishlist(Request $request)
    {
        if ($request->isMethod('get')) {
            if (Auth::check()){
                $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
                $trip_ids=$wishlist->pluck('trip_id');
                $trips=TripModel::whereIn('id',$trip_ids)->paginate(3);
                return view('themes.default.user.wishlist', compact('wishlist','trips'));
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
            if (Auth::check() && Auth::user()) {
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

