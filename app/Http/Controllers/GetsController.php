<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetsController extends Controller
{
    public function index(){

        $posts = DB::table('posts')->get();

        return view('get', compact('posts'));
    }
}
