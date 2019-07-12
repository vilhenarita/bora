<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    protected $redirectTo = '/guia';

    public function __construct()
    {
        $this->middleware('guest:guia');
    }
    public function showResetForm(Request $request, $token = null)
    {
        return view('guia.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function broker()
    {
        return Password::broker('guias');
    }
    protected function guard()
    {
        return Auth::guard('guia');
    }
}
