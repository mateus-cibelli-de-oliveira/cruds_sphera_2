@extends('_partials.app_config')

@section('title')
Página Principal
@endsection    

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand px-2" href="#">CRUD_TURMAS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('turmas.create') }}">Criar nova Turma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('turmas.edit') }}">Atualizar Dados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('turmas.show') }}">Ver Tabela</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@endsection   