<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Passeio;
use  Illuminate\Http\Request;

class PasseioController extends PasseioAPIController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $passeios = parent::index();
        return view('passeio.index', compact('passeios'));
    }

    public function create()
    {
        return view('passeios.create');
    }

    public function store(Request $request)
    {
        parent::store($request);
        return redirect()->route('passeio.index')->with('message', 'Passeio criado com sucesso');
    }

    public function show($id)
    {
        return view('passeio.show', ['passeio' => parent::show($id)]);
    }

    public function edit($id)
    {
        $passeio = Passeio::findOrFail($id);
        return view('passeios.edit',compact('passeio'));
    }

    public function update(Request $request, $id)
    {
        parent::update($request,$id);
        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = P::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('alert-success','Product hasbeen deleted!');
    }
}