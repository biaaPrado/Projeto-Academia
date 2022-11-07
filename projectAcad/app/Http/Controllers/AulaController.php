<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function createAula(Request $request){
        $aula = new Aula;
        $aula->tipo = $request->tipo;
        $aula->dataAula = $request->dataAula;
        $aula->contact = $request->contact;
        $aula->save();
        return redirect()->route('mostraAula');
    }

    public function aula(Request $request){
        return redirect('/aulas')->with('status', 'Aula cadastrada!');
    }

    public function show(){
        return view('verAulas', ['aulas' => Aula::all()]);
    }
}

