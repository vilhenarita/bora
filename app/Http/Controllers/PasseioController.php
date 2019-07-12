<?php

namespace App\Http\Controllers;

use App\Passeio;
use Illuminate\Http\Request;

class PasseioController extends PasseioAPIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_passeio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passeio = parent::store($request);
        dd($passeio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Passeio  $passeio
     * @return \Illuminate\Http\Response
     */
    public function show(Passeio $passeio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passeio  $passeio
     * @return \Illuminate\Http\Response
     */
    public function edit(Passeio $passeio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passeio  $passeio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passeio $passeio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passeio  $passeio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passeio $passeio)
    {
        //
    }
}
