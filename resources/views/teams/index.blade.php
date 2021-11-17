@extends('_partials.app_config')

@section('title')
Página Principal
@endsection    

@section('content')

<nav class="navbar navbar-dark bg-dark">
        
  <a class="navbar-brand px-2" href="#">CRUD_TURMAS</a>
  <div class="collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Criar nova Turma</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Atualizar Dados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Ver Tabela</a>
      </li>
    </ul>
  </div>
  
</nav>

@endsection   