<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function club()
    {
        return view('front.club');
    }
    public function influencer()
    {
      return view('front.influencer');
    }
}
