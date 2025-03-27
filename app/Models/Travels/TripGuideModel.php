<?php

namespace App\Models\Travels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripGuideModel extends Model
{
    protected $table = 'cl_trip_guide';
    protected $fillable = ['trip_id','title','content','ordering'];
}
