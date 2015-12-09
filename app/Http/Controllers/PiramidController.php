<?php

namespace piramid\Http\Controllers;

use Illuminate\Http\Request;

use piramid\Http\Requests;
use piramid\Http\Controllers\Controller;

class PiramidController extends Controller
{
    //default base location
    public function defaultRoute(){
        return view('about');
    }
}
