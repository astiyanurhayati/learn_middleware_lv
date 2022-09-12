<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;


class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        $request->authenticate();
        $request->session()->regenerate();
        $user = $request->user();

      $route_path = $user->is_admin
        ? RouteServiceProvider:: ADMIN_DASHBOARD
       : RouteServiceProvider:: USER_DASHBOARD;

       return redirect()->intended($route_path);
  
    }

   
}
