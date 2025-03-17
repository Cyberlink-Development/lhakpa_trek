<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Models\Travels\TripModel;

class TripReview extends Model
{
    protected $fillable=['trip_id','full_name','user_id','country','email','rating','image','message','status','contact'];

    public function trips()
    {
        return $this->belongsTo('App\Models\Travels\TripModel','trip_id');
    }
}
