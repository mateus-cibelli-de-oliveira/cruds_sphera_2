@extends('layouts.app')

@section('title')
Cadastrar Sala
@endsection

@section('content')

  <div class="container pt-20">
      <div class="mb-4">
          <h1 class="d-flex justify-content-center text-3xl mt-0">Cadastrar Sala</h1>
      </div>
      <div class="d-flex justify-content-center">
          <form action="{{ route('salas.store') }}" method="post" class="form-inline" enctype="multipart/form-data">
              @csrf
              @include('rooms.form')
          </form>
      </div>
  </div>

@endsection
