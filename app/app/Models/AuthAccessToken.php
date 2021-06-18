<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthAccessToken extends Model
{
    use HasFactory;
    
    protected $table = 'auth_access_token';
}
