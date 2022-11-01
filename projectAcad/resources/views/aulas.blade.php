@extends('layouts.main')

@section('title', 'Cadastro de Aulas')

@section('content')

<form action="{{route('verAulas')}}" method="post">
    @csrf
    <h1>Preencha aqui a data de suas aulas </h1>

    <div class="menu">
        <div>
            <label for="name">Tipo:</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="dataAula">Data da aula: </label>
            <input type="date" name="dataAula" id="data">
        </div>

        <div>
            <label for="tel">Contato:</label>
            <input type="text" name="tel" id="telefone">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </div>

</form>

@endsection
