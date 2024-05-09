<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function testingInJson() {
        return response()->json("Hello, here is from Laravel");
    }
}
