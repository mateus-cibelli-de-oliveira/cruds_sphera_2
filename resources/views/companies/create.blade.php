@extends('layouts.app')

@section('title')
Cadastrar Empresa
@endsection    

@section('content')

<div class="container mt-40">
    <div class="mb-4">
      <h1 class="d-flex justify-content-center text-3xl">Cadastrar Empresa</h1>
    </div>
    <div class="d-flex justify-content-center">
      <form action="{{ route('empresas.store') }}" method="post" enctype="multipart/form-data">
      @csrf
          <div class="form-row">
            <div class="form-group col-md-30">
              <label for="name" class="mt-1">Empresa</label>
              <input type="text" class="form-control mt-1" id="name" name="name" placeholder="EspecializaTI" value="{{ $company->name ?? old('name') }}">
            </div>
            <div class="form-row">
              <div class="form-group col-md-30">
                <label for="cnpj" class="ls-label-text">CNPJ</label>
                <input type="text" id="cnpj" name="cnpj" class="form-control mt-1 ls-mask-cnpj" placeholder="32.468.090/1366-05" value="{{ $company->cnpj ?? old('cnpj') }}" onkeypress="$(this).mask('00.000.000/0000-00')">
              </div>
          <div class="form-row">
            <div class="form-group col-md-30">
              <label for="address" class="mt-1">Endereço</label>
              <input type="text" class="form-control mt-1" id="address" name="address" placeholder="Rua Santa Maria, 402" value="{{ $company->address ?? old('address') }}">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
      </form>
    </div>
</div>

@endsection   