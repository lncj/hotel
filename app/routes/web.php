<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myAccountController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend/index');
});
Route::get('login', [myAccountController::class, 'index']);
Route::get('dashboad', [AdminController::class, 'index']);
