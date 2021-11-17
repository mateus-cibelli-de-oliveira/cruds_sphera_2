@extends('layouts.app')

@section('title')
Atualizar Usuário
@endsection    

@section('content')

<div class="container mt-40">
    @foreach ($user)
      <div class="mb-4">
        <h1 class="d-flex justify-content-center text-3xl">Atualizar Usuário</h1>
      </div>
      <div class="d-flex justify-content-center">
        <form action="{{ route('usuarios.update', $user->user->id) }}" method="post" enctype="multipart/form-data">
          @method('put')
          @include('users.create')
        </form>
      </div>
    @endforeach  
  </div>

@endsection   