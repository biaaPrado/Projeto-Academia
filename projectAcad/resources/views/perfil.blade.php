@extends('layouts.main')

@section('title', 'Perfil')

@section('content')

<h1>Seja bem vindo ao seu perfil</h1>
<div class="menu">
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DATA DE NASCIMENTO</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($cadastros as $cadastro)
        <tr>
            <th>{{$cadastro->id}}</th>
            <th>{{$cadastro->name}}</th>
            <th>{{$cadastro->dataNasc}}</th>
            <th>{{$cadastro->email}}</th>
        </tr>
        @endforeach
    </table>
</div>

@endsection
