@extends('layouts.app')

@section('title')
Tabela de Turmas
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
  @foreach ($teams as $team)
      <tr>
        <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
            {{ $team->name }}
        </td>   
        <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b border-gray-500">
            {{ $team->number }}
        </td>
        <select name="room_id" id="room_id" class="form-control mt-2">
          <option value="">- Selecione a Sala -</option>
          @if ( isset($rooms) )
              @if ( count($rooms) )
                  @foreach ( $rooms as $room )
                      <option value="{{ $room->id }}">{{$room->name}}</option>
                  @endforeach
              @endif
          @endif
        </select>
        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
          <a href="{{ route('turmas.destroy', $team->id) }}">Deletar</a>
        </td>
      </tr>
  @endforeach 
</tbody>
</table>

</div>


@endsection   