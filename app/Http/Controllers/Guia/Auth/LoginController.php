<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/guia';
    public function __construct()
    {
        $this->middleware('guest:guia');
    }
    public function showLoginForm()
    {
        return view('guia.auth.login');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect('/guia/login');
    }
    protected function guard()
    {
        return Auth::guard('guia');
    }
}
