@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<h1>Projeto Academia </h1>
<div class="menu">
    <a href="{{route('cadastro')}}">Cadastre-se na Academia</a>
    <a href="{{route('aulas')}}">Cadastre suas aulas</a>
    <a href="{{route('perfil')}}">Perfis cadastrados</a>
    <a href="{{route('verAulas')}}">Aulas cadastradas</a>
</div>
