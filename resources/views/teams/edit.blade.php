@extends('layouts.app')

@section('title')
Atualizar Turma
@endsection    

@section('content')

<div class="container mt-40">
    @foreach ($team)
      <div class="mb-4">
        <h1 class="d-flex justify-content-center text-3xl">Atualizar Turma</h1>
      </div>
      <div class="d-flex justify-content-center">
        <form action="{{ route('turmas.update', $room->room->id) }}" method="post" enctype="multipart/form-data">
          @method('put')
          @include('teams.create')
        </form>
      </div>
    @endforeach  
  </div>

@endsection   