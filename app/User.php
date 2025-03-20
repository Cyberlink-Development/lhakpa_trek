<?php

namespace App;

use App\Model\Subscriber;
use App\Models\Inquiry\BookingModel;
use App\Models\Travels\TripModel;
use App\Models\Wishlist;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','roles','address','phone','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
    ];
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);  
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Travels\TripsTag', 'user_trip_tags_rel', 'user_id', 'tag_id')->withTimestamps(); 
    }

    public function bookings()
    {
        return $this->hasMany(BookingModel::class);
    }

    public function subscriber(){
        return $this->hasOne(Subscriber::class, 'user_id');
    }
}
