<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetsController extends Controller
{
    public function index(){
        return view('get');
    }
}
