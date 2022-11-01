<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function salvaAula(Request $request){
        $aula = new Aula;
        $aula->tipo = $request->tipo;
        $aula->dataAula = $request->dataAula;
        $aula->contato = $request->contato;

        $aula->save();
        return redirect('/verAula');
    }

    public function aula(Request $request){
        return redirect('/verAula')->with('status', 'Aula cadastrada!');
    }

    public function show($id){
        $aula = Aula::findOrFail($id);

        return view('events.show', ['aula' => $aula]);
    }

}

