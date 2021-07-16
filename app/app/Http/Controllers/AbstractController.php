<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AbstractController extends BaseController
{
    abstract public function index();
}
