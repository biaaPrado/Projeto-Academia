<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request){
        $user = new User;
        $user->email = $request->email;
        $user->password = $request->senha;
        $user->save();
        return redirect('/logar');
        // dd($request);
    }
}
