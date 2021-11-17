@extends('users.navbar')

@section('title')
Index dos usuários
@endsection    

@section('content')

<nav class="navbar navbar-dark bg-dark">
        
    <a class="navbar-brand px-2" href="#">Painel do Usuário</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Criar novo usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Atualizar cadastro</a>
        </li>
      </ul>
    </div>

</nav>

@endsection   