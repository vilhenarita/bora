<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuiaLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:guia', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
      return view('guia-login');
    }
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('guia')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('passeio'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email'));
    }
    public function logout()
    {
        Auth::guard('guia')->logout();
        return redirect('/');
    }
}
