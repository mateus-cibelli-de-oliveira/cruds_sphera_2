@extends('layouts.app')

@section('title')
Cadastrar Usuário
@endsection    

@section('content')

<div class="container pt-20">
    <div class="mb-4">
        <h1 class="d-flex justify-content-center text-3xl mt-0">Cadastrar Usuário</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form action="{{ route('usuarios.store') }}" method="post" class="form-inline" enctype="multipart/form-data">
            @csrf
            @include('users.form')
        </form>
    </div>
</div>

@endsection   