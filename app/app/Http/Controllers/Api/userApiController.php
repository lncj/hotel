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
use Illuminate\Support\Facades\Http;

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
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function authoRization($request){

    }

    public function guard()
    {
        return Auth::guard();
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' =>auth('api')->factory()->getTTL() -58,
        ]);
    }
}
