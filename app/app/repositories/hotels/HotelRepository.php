<?php

namespace App\Repositories\hotels;
use App\Repositories\BaseRepository;
use App\Repositories\hotels\HotelRepositoryInterface;
class HotelRepository extends BaseRepository implements  HotelRepositoryInterface{
    
    public function getModel() {
        return \App\Models\hotel::class;
    }

}