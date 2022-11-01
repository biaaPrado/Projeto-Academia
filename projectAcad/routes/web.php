<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cad'); // rota padrão q vai para o cadastro de usuarios
})->name("cad");

Route::post('/cadastrar_user', [UserController::class, 'create'])->name('cadastrar_user');

Route::get('/logar', function(){
    return view('home'); // aqui ele vai para o login, logo após cadastrar
})->name("home");

Route::post('/validando_login', [UserController::class, 'login'])->name('validating');

Route::get('/menu', function(){
    return view('menu'); // vai para o menu, após estar logado
})->name('menu');

Route::get('/cadastrar_alunos', function(){
    return view('cadastro');  // caso a opção escolhida seja cadastrar na academia, vai para o cadastro de aluno
})->name("cadastro");

Route::post('/perfil', function() {
    return view('perfil'); // após o aluno se cadastrar, a pessoa visualiza seu perfil
})->name("perfil");

Route::controller('cadastro', 'CadastroController');

Route::get('/cadastrar_aulas', function(){
    return view('aulas');  // caso seja escolhido a opção cadastrar aulas
})->name("aulas");

Route::post('/salvando_aula', [AulaController::class, 'create'])->name('createAula');

Route::get('/aulas/{$id}', [AulaController::class, 'show']);

Route::post('/aulas', function(){
    return view('verAulas');  // após cadastrar a aula, visualiza as opções disponíveis
})->name('verAulas');



