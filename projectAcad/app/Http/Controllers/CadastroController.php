<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function salvaCadastro(Request $request){
        $cadastro = new Cadastro;
        $cadastro->name = $request->name;
        $cadastro->dataNasc = $request->dataNasc;
        $cadastro->email = $request->email;
        $cadastro->save();
        return redirect()->route('mostraCadastro');
    }

    public function cadastro(Request $request){
        return redirect('/perfil')->with('status', 'Cadastro feito com sucesso!');
    }

    public function show(){
        return view('perfil', ['cadastros' => Cadastro::all()]);
    }
}
