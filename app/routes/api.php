<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/users', 'App\Http\Controllers\Api\userApiController@login');
Route::post('/users/register', 'App\Http\Controllers\Api\userApiController@register');
Route::get('/users/token', 'App\Http\Controllers\Api\userApiController@index');
Route::post('/user/create', 'App\Http\Controllers\Api\userApiController@create');

Route::get('/hotel', 'App\Http\Controllers\Api\hotelApiController@index');

