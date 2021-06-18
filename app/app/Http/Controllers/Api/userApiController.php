<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AuthAccessToken;
use App\repositories\users\UserRepository;

class userApiController extends AbstractApiController
{

    protected $userRepository;
    public function __constructor(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function create(Request $request) {
        $request = $request->all();
        $request['password'] = bcrypt($request['password']);
        $this->userRepository->create($request);
    }

    public function register(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
    }

    public function update() {
        
    }

    public function destroy() {
        
    }

    /*
        * @redirect
    */
    public function login(Request $request) {
        $redirect = 'http://127.0.0.1:8000/';
        $header = $request->header('Authorization');
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) {
            $user_id = auth()->user()->id;
            // $auth_access_token = 
            return response()->json([
                'token_id' => '32gdf45hjojeifaawpeofkipaokjagkafpk',
                'redirect' => $redirect,
                'expires_at' => '',
            ]);
        }
    }

    public function authoRization($request){

    }
}
