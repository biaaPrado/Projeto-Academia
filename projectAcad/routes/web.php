<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\CadastroController;

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

//___________________________________ cadastro de usuario para acessar a pagina_____________________________________ //

Route::post('/cadastrar_user', [UserController::class, 'create'])->name('cadastrar_user'); //salva os dados no banco

Route::get('/logar', function(){
    return view('home'); // aqui ele vai para o login, logo após cadastrar
})->name("home");

Route::post('/validando_login', [UserController::class, 'login'])->name('validating'); //faz a validação do ***login***

Route::get('/menu', function(){
    return view('menu'); // vai para o menu, após estar logado
})->name('menu');

//_____________________________________ cadastro de alunos_________________________________________________________ //

Route::get('/cadastrar_alunos', function(){
    return view('cadastro');  // caso a opção escolhida seja cadastrar na academia, vai para o cadastro de aluno
})->name("cadastro");

Route::post('/salvaCadastro', [CadastroController::class, 'salvaCadastro'])->name('salvaCadastro');

Route::post('/validatingCadastro', [CadastroController::class, 'cadastro'])->name('validatingCadastro');

Route::get('/perfil', [CadastroController::class, 'show'])->name('perfil');

Route::post('/perfil', function() {
    return view('perfil'); // após o aluno se cadastrar, a pessoa visualiza seu perfil
})->name('perfil');

//____________________________________ cadastro de aulas __________________________________________________________//

Route::get('/cadastrar_aulas', function(){
    return view('aulas');  // caso seja escolhido a opção cadastrar aulas
})->name("aulas");

Route::post('/createAula', [AulaController::class, 'createAula'])->name('createAula');

Route::post('/validatingAula', [AulaController::class, 'aula'])->name('validatingAula');

Route::get('/aulas', [AulaController::class, 'show'])->name('aulas'); //recebe o metódo show dpo controller que fará retorno com a exibição dos dados na view

Route::post('/aulas', function(){
    return view('verAulas');  // após cadastrar a aula, visualiza os dados cadastrados
})->name('aulas');


