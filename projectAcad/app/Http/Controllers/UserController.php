<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request){
        $user = new User;
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->password = Hash::make($request->senha);
        $user->save();
        return redirect('/logar');
        // dd($request);
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->senha])){
            return redirect('/menu');
        }else{
            return redirect('/logar')->with('status', 'Credenciais incorretas!');
        }

    }
}
