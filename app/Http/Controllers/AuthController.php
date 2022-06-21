<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->only(['email'=>'email','password'=>'password']);
        
        if (Auth::guard('web')->attempt($input)) {
            
            return redirect()->to('/dashboard');
        } else {
            
            return redirect()->to('/');
        }
    }
}
