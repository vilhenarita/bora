<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class TuristaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function authentication()
    {
        $first_name = $request->input('first_name');       
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $rg = $request->input('rg');
        $cpf = $request->input('cpf');
        $data_nasc = $request->input('data_nasc');
        $genero = $request->input('genero');
        $fone = $request->input('fone');
        $img = $request->input('img');

        

    }


}