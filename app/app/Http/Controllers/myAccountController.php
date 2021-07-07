<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class myAccountController extends Controller
{
    public function index(Request $request){
        return view('account/login');
    }
    public function login() {
    }

}
