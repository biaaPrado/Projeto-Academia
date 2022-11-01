@extends('layouts.main')

@section('title', '$aula->tipo')

@section('content')

    <div class="menu">
        <h1>{{$aula->tipo}}</h1>
        
    </div>

@endsection
