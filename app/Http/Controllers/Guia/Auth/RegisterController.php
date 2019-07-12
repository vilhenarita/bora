<?php

namespace App\Http\Controllers\Auth;

use App\Guard;
use App\Guia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/guia';

    public function __construct()
    {
        $this->middleware('guest:guia');
    }
    public function showRegistrationForm()
    {
        return view('guia.auth.register');
    }
    protected function guard()
    {
        return Auth::guard('guia');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'email' => 'required|email|max:255|unique:guias',
        ]);
    }
    protected function create(array $data)
    {
        return
            Guia::create([

        ]);
    }
}
