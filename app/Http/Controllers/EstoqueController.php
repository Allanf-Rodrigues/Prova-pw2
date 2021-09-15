<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;


use App\Http\Requests\EstoqueRequest;

class EstoqueController extends Controller
{

    public function index()
    {
        $estoque = Estoque::all();
        return view('estoque.index', compact('estoque'));
    }


    public function create()
    {
        $estoque = Estoque::all();
        return view('estoque.create', compact('estoque'));
    }


    public function store(EstoqueRequest $request)
    {
        $estoque = new Estoque();
        $estoque->produto = $request->input('produto');
        $estoque->quantidade = $request->input('quantidade');

        $estoque->save();
        return redirect()->route('estoque.index', compact('estoque'));
    }


    public function show($id)
    {
        $estoque = Estoque::find($id);
        if(isset($estoque)){
            return view ('estoque.show', compact('estoque'));
        }
            return view ('estoque.index');
    }

    public function edit($id)
    {
        //
    }


    public function update(EstoqueRequest $request, $id)
    {
        $estoque = Estoque::find($id);
        if(isset($estoque)){
            $estoque->produto = $request->input('produto');
            $estoque->quantidade = $request->input('quantidade');

            $estoque->save();
        }
            return redirect()->route('estoque.index', compact('estoque'));
    }


    public function destroy($id)
    {
        $estoque = Estoque::find($id);
        if(isset($estoque))
        {
            $estoque->delete();
        }
        return redirect()->route('estoque.index');
    }
}
