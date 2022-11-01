@extends('layouts.main')

@section('title', 'Cadastre-se')

@section('content')

    <body class="antialiased">
        <h1>Projeto Academia </h1>

        <div class="menu">
            <div>
                <h3>Faça seu cadastro!</h3>
            </div>

            <form action="{{route('cadastrar_user')}}" method="post">
                @csrf
                <div>
                    <label for="email">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>

                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>

    </body>
</html>
