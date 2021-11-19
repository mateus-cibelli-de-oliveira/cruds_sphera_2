@extends('layouts.app')

@section('title')
Atualizar Usuário
@endsection

@section('content')

  <div class="container pt-20">
      <div class="mb-4">
          <h1 class="d-flex justify-content-center text-3xl">Atualizar Usuário</h1>
      </div>
      <div class="d-flex justify-content-center pt-2">
          <form action="{{ route('usuarios.update', $user->id) }}" method="post" enctype="multipart/form-data">
              @method('put')
              @include('users.form')
          </form>
      </div>
  </div>

@endsection
