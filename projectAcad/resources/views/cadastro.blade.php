@extends('layouts.main')

@section('title', 'Cadastro de Alunos')

@section('content')

<form action="{{route('salvaCadastro')}}" method="post">
    @csrf
    <h1>Registre seu perfil</h1>

    <div class="menu">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="dataNasc">Data de Nascimento: </label>
            <input type="date" name="dataNasc" id="data">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </div>

</form>

@endsection
