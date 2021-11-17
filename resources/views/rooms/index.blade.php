@extends('_partials.app_config')

@section('title')
Página Principal
@endsection    

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">      
    <a class="navbar-brand px-2" href="#">HOME_SALAS</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('salas.create') }}">Criar nova Sala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('salas.edit') }}">Atualizar Dados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('salas.show') }}">Ver Tabela</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@endsection   