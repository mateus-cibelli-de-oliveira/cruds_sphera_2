@extends('layouts.app')

@section('title')
Cadastrar Turma
@endsection

@section('content')

    <div class="container pt-20">
        <div class="mb-4">
            <h1 class="d-flex justify-content-center text-3xl mt-0">Cadastrar Turma</h1>
        </div>
        <div class="d-flex justify-content-center">
            <form action="{{ route('turmas.store') }}" method="post" class="form-inline" enctype="multipart/form-data">
                @csrf
                @include('teams.form')
            </form>
        </div>
    </div>

@endsection
