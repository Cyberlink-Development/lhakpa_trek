<?php

namespace App\Models\Travels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripsTag extends Model
{
    use HasFactory;
    protected $table = 'trips_tag';
    protected $fillable = ['title'];

    public function trips()
    {
        return $this->belongsToMany('App\Models\Travels\TripModel', 'cl_trip_tags_rel', 'trip_tag_id', 'trip_id')->withTimestamps();
    }
}
