<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable=['user_id','email','verified','name'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
