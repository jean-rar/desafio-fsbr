<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastros;

class CadastrosController extends Controller
{

    public function index()
    {
        return view ('index', ['dados' => Cadastros::simplePaginate(5)]);
    }


    public function store(Request $request)
    {
        Cadastros::create([
            'nome' => $request->name,
            'email' => $request->email,
            'idade' => $request->age
        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function create(){
        return view('formulario');
    }

    public function edit($id)
    {
        $dado = Cadastros::find($id)->get();
        return redirect()->route('cadastro.editar', compact('dado', 'id'));
    }


    public function update(Request $request, $id)
    {
        $cadastro = Cadastros::find($id)->get;
        $cadastro->update($request->all());
    }


    public function delete($id)
    {
        $cadastro = Cadastros::find($id);
        $cadastro->delete();
        return redirect()->route("index");
    }
}
