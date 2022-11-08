@extends('layouts.main')

@section('title', 'Ver aulas')

@section('content')

<h1>Aulas Cadastradas</h1>
<div class="menu2">
    <table>
        <tr>
            <th>ID</th>
            <th>TIPO DA AULA</th>
            <th>DATA</th>
            <th>CONTATO</th>
        </tr>

        @foreach($aulas as $aula)
        <tr>
            <th>{{$aula->id}}</th>
            <th>{{$aula->tipo}}</th>
            <th>{{$aula->dataAula}}</th>
            <th>{{$aula->contact}}</th>
        </tr>
        @endforeach
    </table>
</div>

@endsection
