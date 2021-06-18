<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class AbstractApiController
{
    abstract public function create(Request $request);

    abstract public function update();

    abstract public function destroy();
}
