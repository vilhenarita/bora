<?php

namespace App\Http\Controllers;

use App\Turista;
use Illuminate\Http\Request;

class TuristaController extends TuristaAPIController
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
        return view('cadastro_turista');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turista = parent::store($request);
        dd($turista);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function show(Turista $turista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function edit(Turista $turista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turista $turista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turista $turista)
    {
        //
    }
}
