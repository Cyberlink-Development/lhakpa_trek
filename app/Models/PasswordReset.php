<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    protected $table = 'password_reset_tokens';

    // Specify email as the primary key
    protected $primaryKey = 'email';

    // Indicate that the primary key is not auto-incrementing
    public $incrementing = false;

    // Specify the key type as string (since email is a string)
    protected $keyType = 'string';

    // Disable timestamps since you’re managing created_at manually
    public $timestamps = false;

    // Define fillable fields for mass assignment
    protected $fillable = ['email', 'token', 'created_at'];
}
