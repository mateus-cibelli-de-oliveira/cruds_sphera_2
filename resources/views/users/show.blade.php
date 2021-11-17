@extends('layouts.app')

@section('title')
Tabela de Usuários
@endsection    

@section('content')

<div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Listagem Geral</h1>
</div>

<div class="d-flex justify-content-center">

<table class="mt-2">
    <thead>
      <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
        <th scope="col" class="px-md-5">Nome</th>
        <th scope="col" class="px-md-5">E-mail</th>
        <th scope="col" class="px-md-5">CPF</th>
      </tr>
    </thead>

<tbody>
  @foreach ($users as $user)
    <tr>
      <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
          {{ $user->name }}
      </td>   
      <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b border-gray-500">
          {{ $user->email }}
      </td>
      <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b border-gray-500">
      {{ $user->cpf }}
    </td>
      <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
      <a href="{{ route('usuarios.destroy', $user->id) }}">Deletar</a>
      </td>
    </tr>
  @endforeach 
</tbody>
</table>

</div>


@endsection   