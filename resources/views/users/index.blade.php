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
                <th scope="col" class="px-md-5">Ações</th>
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
                    <td class="px-6 px-md-5 py-4 text-sm leading-5">
                        <a class="nav-link" href="{{ route('usuarios.edit') }}">Atualizar Dados</a>
                        <a class="nav-link" href="{{ route('usuarios.show') }}">Exibir Usuários</a>
                        <a class="nav-link" href="{{ route('usuarios.destroy', $user->id) }}">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>    

@endsection   