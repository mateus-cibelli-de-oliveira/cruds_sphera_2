@extends('layouts.app')

@section('title')
Atualizar Empresa
@endsection

@section('content')

  <div class="container mt-40">
      <div class="mb-4">
          <h1 class="d-flex justify-content-center text-3xl">Atualizar Empresa</h1>
      </div>
      <div class="d-flex justify-content-center">
          <form action="{{ route('empresas.update', $company->id) }}" method="post" enctype="multipart/form-data">
              @csrf  
              @method('put')
              @include('companies.form')
          </form>
      </div>
  </div>

@endsection
