<?php

namespace App\Models\Inquiry;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeedAgentModel extends Model
{
    use HasFactory;
    protected $table = 'cl_need_agent';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'pcode',
        'designation',
        'message',
        'url',
        'cname',
    ];
}
