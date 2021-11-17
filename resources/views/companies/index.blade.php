@extends('layouts.app')

@section('title')
Página Principal
@endsection    

@section('content')

<a class="navbar-brand px-2" href="#">HOME_EMPRESAS</a>
<div class="collapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link text-light" href="#">Criar nova Empresa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="#">Atualizar Dados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="#">Ver Tabela</a>
    </li>
  </ul>
</div>

@endsection   