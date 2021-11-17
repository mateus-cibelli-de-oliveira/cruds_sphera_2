@extends('layouts.app')

@section('title')

@endsection    

@section('content')

<div class="container mt-40">
  @foreach ($company)
    <div class="mb-4">
      <h1 class="d-flex justify-content-center text-3xl">Atualizar Empresa</h1>
    </div>
    <div class="d-flex justify-content-center">
      <form action="{{ route('empresas.update', $company->company->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @include('companies.create')
      </form>
    </div>
  @endforeach  
</div>

@endsection   