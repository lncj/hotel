<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AuthAccessToken;
use App\repositories\users\UserRepository;
use App\repositories\authAccessToken\AuthAccessRepository;
use Illuminate\Support\Facades\Validator;

class userApiController extends AbstractApiController
{

    protected $userRepository;
    protected $authAccessToken;
    public function __construct(UserRepository $userRepository, AuthAccessToken $authAccessToken){
        $this->userRepository = $userRepository;
        $this->authAccessToken = $authAccessToken;
    }

    public function create(Request $request) {
        $request = $request->all();
        $request['password'] = bcrypt($request['password']);
        $rules = array(
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        );
        $validator = Validator::make($request, $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $this->userRepository->create($request);
    }

    public function register(Request $request) {
        $this->create($request);
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
        if(!$header){
            return;
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // $request->session()->regenerate();
        if (Auth::attempt($credentials)) {
            $user_id = auth()->user()->id;
            // AuthAccessRepository
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
