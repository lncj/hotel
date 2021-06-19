<?php

namespace App\Repositories\authAccessToken;
use App\Repositories\BaseRepository;
use App\Repositories\authAccessToken\AuthAccessRepositoryInterface;
class AuthAccessRepository extends BaseRepository implements  HotelReposAuthAccessRepositoryInterfaceitoryInterface{
    
    public function getModel() {
        return \App\Models\AuthAccessToken::class;
    }

}