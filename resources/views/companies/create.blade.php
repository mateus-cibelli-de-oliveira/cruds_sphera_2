@extends('layouts.app')

@section('title')
Cadastrar Empresa
@endsection

@section('content')

  <div class="container pt-20">
      <div class="mb-4">
          <h1 class="d-flex justify-content-center text-3xl mt-0">Cadastrar Empresa</h1>
      </div>
      <div class="d-flex justify-content-center">
          <form action="{{ route('empresas.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              @include('companies.form')
          </form>
      </div>
  </div>

@endsection
