<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $fillable = ['name', 'room_name', 'feature_image', 'images' ];

    public $timestamps = false;
}
