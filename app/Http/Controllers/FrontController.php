<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
// use Jenssegers\Agent\Facades\Agent;

class FrontController extends Controller
{
    public function index()
    {

        return view('front.index', get_defined_vars());
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
