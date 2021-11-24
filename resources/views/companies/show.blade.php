@extends('layouts.app')

@section('title')
Empresa
@endsection

@section('content')

    <div class="mb-4 mt-5">
        <h1 class="d-flex justify-content-center text-3xl">Empresa</h1>
    </div>

    <div class="d-flex justify-content-center">
        <table class="mt-4">
            <thead>
                <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
                    <th scope="col" class="px-md-5">Empresa</th>
                    <th scope="col" class="px-md-5">CNPJ</th>
                    <th scope="col" class="px-md-4">Endereço</th>
                    <th scope="col" class="d-flex px-md-5 ml-4">Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr class="whitespace-no-wrap border-b">
                    <td
                        class="px-6 px-md-5 py-4 text-blue-600 text-sm leading-5">
                        {{ $company->name }}
                    </td>
                    <td class="px-6 px-md-5 py-4">
                        {{ $company->cnpj }}
                    </td>
                    <td class="px-6 px-md-4 py-4">
                        <span class="d-flex">{{ $company->address }}</span>
                    </td>
                    <td class="px-6 px-md-5 text-red-600 text-sm leading-5">
                        <button class="d-flex ml-4" type="submit" form="delete{{$company->id}}" name="delete" value="{{ $company->id }}">Deletar</button>
                    </td>
                    <form method="post" action="{{ route('empresas.destroy', $company->id) }}" id="delete{{$company->id}}" class="form-delete-data">
                        @csrf
                        {{ method_field('DELETE') }}
                    </form>
                </tr>
            </tbody>
            
        </table>
    </div>

    <div class="d-flex justify-content-center py-4">
        <a class="btn btn-primary outline-none shadow-none" href="{{ route('empresas.index') }}" role="button">Voltar</a>
    </div>
@endsection
