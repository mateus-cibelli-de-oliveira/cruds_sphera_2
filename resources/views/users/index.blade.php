@extends('_partials.app_config')

@section('title')
Página Principal
@endsection    

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand px-2" href="#">Painel do Usuário</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.create') }}">Criar novo usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.edit') }}">Atualizar Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.show') }}">Ver Tabela</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

@endsection   