<?php

namespace App\Http\Controllers\Guia\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:guia');
    }
    public function index()
    {
        return view('guia.home');
    }
}
