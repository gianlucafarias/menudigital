<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;
class StoreController extends DefaultLoginController
{
    protected $redirectTo = RouteServiceProvider::STORE;

    public function __construct()
    {
        $this->middleware('guest:store')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login.store');
    }
    public function email()
    {
        return 'email';
    }
//    public function logout(Request $request)
//    {
//        return 1;
//    }

    protected function guard()
    {
        return Auth::guard('store');
    }
}
