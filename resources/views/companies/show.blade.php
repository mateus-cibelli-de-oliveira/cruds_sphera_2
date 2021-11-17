@extends('layouts.app')

@section('title')
Tabela de Empresas
@endsection    

@section('content')

<div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Listagem Geral</h1>
</div>

<div class="d-flex justify-content-center">

<table class="mt-2">
    <thead>
      <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
        <th scope="col" class="px-md-5">Empresa</th>
        <th scope="col" class="px-md-5">CNPJ</th>
        <th scope="col" class="px-md-5">Endereço</th>
      </tr>
    </thead>

<tbody>
  @foreach ($company)
      <tr>
          <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
              {{ $company->name }}
          </td>   
          <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b border-gray-500">
              {{ $company->cnpj }}
          </td>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
            <span class="d-flex pl-7">{{ $company->address }}</span>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
            <form method="delete" action="{{ route('empresas.destroy', $company->id) }}" id="delete{{$company->id}}">
            @csrf
            {{ method_field('DELETE') }}

            <button type="submit" form="delete{{$company->id}}" name="delete" value="{{ $company->id }}" class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Deletar</button>

            {{-- <a href="{{ route('companies.destroy', $company->id) }}">Deletar</a> --}}
            </form>
          </td>
      </tr>
  @endforeach 
</tbody>
</table>

</div>

@endsection   