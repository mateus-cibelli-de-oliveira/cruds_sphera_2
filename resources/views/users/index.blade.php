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
        </ul>
        <ul class="navbar-nav ml-auto"> 
            <div class="dropdown">
                  <a class="nav-link btn btn-secondary bg-transparent border-0 dropdown-toggle" role="button"
                  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu mt-10 ml-10 pl-2 opacity-75 bg-gray-500" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item d-flex text-white bg-transparent text-sm" href="{{ route('logout') }}" style="color:#c7c8bf;" onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">Logout</a>
                  </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                @csrf
            </form>
        </ul>
    </div>
  </div>
</nav>

<div class="mb-4 mt-5">
    <h1 class="d-flex justify-content-center text-3xl"><b>Listagem Geral</b></h1>
</div>

<div class="d-flex justify-content-center">

    <table class="mt-4">

        <thead>
            <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
                <th scope="col" class="px-md-5">Nome</th>
                <th scope="col" class="px-md-5">E-mail</th>
                <th scope="col" class="px-md-5">CPF</th>
                <th scope="col" class="px-md-5 d-flex ml-4">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr class="whitespace-no-wrap border-b">
                    <td class="px-6 px-md-5 text-blue-600 text-sm leading-5">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 px-md-5 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 px-md-5 py-4">
                        {{ $user->cpf }}
                    </td>
                    <td class="px-6 px-md-5 pt-2 text-sm leading-5 d-block">
                        <a class="nav-link" href="{{ route('usuarios.edit', $user->id) }}">Atualizar Dados</a>
                    </td>
                    <td class="px-6 px-md-5 text-sm leading-5 d-block">
                        <a class="nav-link" href="{{ route('usuarios.show', $user->id) }}">Exibir Usuário</a>
                    </td>
                    <td class="px-6 px-md-5 text-sm leading-5 d-block">
                        <button class="nav-link text-red-600" type="submit" form="delete{{$user->id}}" name="delete" value="{{ $user->id }}">Deletar</button>
                    </td>
                    <form method="post" action="{{ route('usuarios.destroy', $user->id) }}" id="delete{{$user->id}}" class="form-delete-data">
                        @csrf
                        {{ method_field('DELETE') }}
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>    

@endsection   