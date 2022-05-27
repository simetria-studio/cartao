<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {


        $authValid = Auth::guard('web')->validate(['email' => $request->email, 'password' => $request->password]);

        if ($authValid) {
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {

                return response()->json('home', 200);
            }
        } else {
            return response()->json(['invalid' => 1], 422);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/home');
    }
}
