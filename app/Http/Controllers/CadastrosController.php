<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastros;

class CadastrosController extends Controller
{

    public function index()
    {
        return view ('index', ['dados' => Cadastros::simplePaginate(1)]);
    }


    public function store(Request $request)
    {
        Cadastros::create([
            'nome' => $request->name,
            'email' => $request->email,
            'idade' => $request->age
        ]);

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

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }


    public function update(Request $request, $id)
    {
        $cadastro = Cadastros::find($id);
        $cadastro->update($request->all());
    }


    public function delete($id)
    {
        dd($id);
        $cadastro = Cadastros::find($id);
        $cadastro->delete();
        return redirect('/index')->with('msg', 'registro deletado');
    }
}
