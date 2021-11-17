@extends('layouts.app')

@section('title')
Tabela de Salas
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
        <th scope="col" class="px-md-5">Número</th>
      </tr>
    </thead>

<tbody>
  @foreach ($rooms as $room)
    <tr>
      <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
          {{ $room->name }}
      </td>   
      <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b border-gray-500">
          {{ $room->number }}
      </td>
      <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
      <a href="{{ route('salas.destroy', $room->id) }}">Deletar</a>
      </td>
    </tr>
  @endforeach 
</tbody>
</table>

</div>

@endsection   