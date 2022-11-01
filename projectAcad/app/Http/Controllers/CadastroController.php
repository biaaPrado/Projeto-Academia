<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function salvaCadastro(Request $request){
        $aluno = new Cadastro;
        $aluno->name = $request->name;
        $aluno->dataNasc = $request->dataNasc;
        $aluno->email = $request->email;

        $aluno->save();
    }

    public function perfil($id){
        $cadastro = Event::findOrFail($id);

        return  view('cadastro.show', ['cadastro' => $cadastro]);
    }
}
