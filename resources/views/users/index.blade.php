@extends('_partials.app_config')

@section('title')
Página Principal
@endsection    

@section('content')

<nav class="navbar navbar-dark bg-dark">
        
  <a class="navbar-brand px-2" href="#">Painel do Usuário</a>
  <div class="collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Criar novo usuário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Atualizar Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Ver Tabela</a>
      </li>
    </ul>
  </div>

</nav>

@endsection   