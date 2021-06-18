<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\hotels\HotelRepository;

class HotelApiController extends Controller
{
    public function index(HotelRepository $hotelRepository) {
        
    }
}
