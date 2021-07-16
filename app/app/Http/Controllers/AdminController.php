<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends AbstractController
{
    public function index(){
        return view('admin/index');
    }
}
