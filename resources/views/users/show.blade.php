@extends('layouts.app')

@section('title')
Usuário
@endsection

@section('content')

    <div class="mb-4">
        <h1 class="d-flex justify-content-center text-3xl">Usuário</h1>
    </div>

    <div class="d-flex justify-content-center">
        <table class="mt-2">
            <thead>
                <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
                    <th scope="col" class="px-md-5">Nome</th>
                    <th scope="col" class="px-md-4">E-mail</th>
                    <th scope="col" class="px-md-4">CPF</th>
                    <th scope="col" class="px-md-5">Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr class="whitespace-no-wrap border-b">
                    <td class="px-6 px-md-5 py-4 text-blue-600 text-sm leading-5">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 px-md-4 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 px-md-4 py-4">
                        {{ $user->cpf }}
                    </td>
                    <td class="px-6 px-md-5 py-4 text-red-600 text-sm leading-5">
                        <button class="d-flex" type="submit" form="delete{{$user->id}}" name="delete" value="{{ $user->id }}">Deletar</button>
                    </td>
                    <form method="post" action="{{ route('usuarios.destroy', $user->id) }}" id="delete{{$user->id}}" class="form-delete-data">
                        @csrf
                        {{ method_field('DELETE') }}
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center py-4">
      <a class="btn btn-primary outline-none shadow-none" href="{{ route('usuarios.index') }}" role="button">Voltar</a>
    </div>
@endsection
