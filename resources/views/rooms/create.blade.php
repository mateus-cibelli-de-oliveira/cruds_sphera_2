@extends('layouts.app')

@section('title')
Cadastrar Sala
@endsection    

@section('content')

<form action="{{ route('salas.store') }}" method="post" class="form-inline" enctype="multipart/form-data">
@csrf
    <div class="form-group mx-sm-3 mb-2">
        <label for="name" class="sr-only">Nome</label>
        <input type="text" class="form-control rounded" id="name" name="name" placeholder="Ciências Humanas" value="{{ $room->name ?? old('name') }}">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="number" class="sr-only">Numero</label>
      <select class="form-select" id="number" name="number">
        <option>101</option>
        <option>102</option>
        <option>103</option>
        <option>104</option>
        <option>105</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2 ml-4">Confirmar</button>
</form>

@endsection     