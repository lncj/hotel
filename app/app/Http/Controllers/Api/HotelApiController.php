<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\hotels\HotelRepository;
use Illuminate\Support\Facades\Validator;

class HotelApiController extends AbstractApiController
{
    protected $hotelRepository;
    public function __construct(HotelRepository $hotelRepository){
        $this->hotelRepository = $hotelRepository;
    }

    public function index(HotelRepository $hotelRepository, Request $request) {
        return $hotelRepository->getFeatureProduct($request['offset'], $request['limit']);
    }

    public function create(Request $request) {

        $request = $request->all();
        $rules = array(
            'name' => 'required',
            'room_name' => 'required',
        );
        $validator = Validator::make($request, $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }
        return $this->hotelRepository->create($request);
    }

    public function update(){
        return;
    }
    
    public function destroy(){
        return;
    }
}
