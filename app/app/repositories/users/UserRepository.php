<?php

namespace App\repositories\users;
use App\repositories\BaseRepository;
use App\repositories\users\UserRepositoryInterface;
class UserRepository extends BaseRepository implements UserRepositoryInterface{
    
    public function getModel() {
        return \App\Models\User::class;
    }

}