<?php

namespace App\Repositories\hotels;
use App\Repositories\BaseRepository;
use App\Repositories\hotels\HotelRepositoryInterface;
class HotelRepository extends BaseRepository implements  HotelRepositoryInterface{
    
    public function getModel() {
        return \App\Models\hotel::class;
    }

    public function getFeatureProduct($offset = 3) {
        return $this->model::paginate(1);
        // return $this->model
        // ->offset(0)
        // ->limit(3)
        // ->get();
    }

}