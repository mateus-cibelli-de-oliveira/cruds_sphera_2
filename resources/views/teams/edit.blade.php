@extends('layouts.app')

@section('title')
Atualizar Turma
@endsection

@section('content')

  <div class="-mt-10">
      <div class="container mt-40">
          <div class="mb-4">
              <h1 class="d-flex justify-content-center text-3xl">Atualizar Turma</h1>
          </div>
          <div class="d-flex justify-content-center">
            <form action="{{ route('turmas.update', $team->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                @include('teams.form')
            </form>
          </div>
      </div>
  </div>

@endsection
