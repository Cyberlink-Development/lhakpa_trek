<?php

namespace App\Models\Travels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripsTag extends Model
{
    use HasFactory;
    protected $table = 'trips_tag';
    protected $fillable = ['title'];
}
