<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    public function __construct()
    {
        $this->middleware('guest:guia');
    }
    public function showLinkRequestForm()
    {
        return view('guia.auth.passwords.email');
    }
    public function broker()
    {
        return Password::broker('guias');
    }

}
