@extends('layouts.app')

@section('title')
Turma
@endsection

@section('content')

    <div class="mb-4 mt-5">
        <h1 class="d-flex justify-content-center text-3xl">Turma</h1>
    </div>

    <div class="d-flex justify-content-center">
        <table class="mt-4">
            <thead>
                <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
                    <th scope="col" class="px-md-5">Nome</th>
                    <th scope="col" class="px-md-5">Número</th>
                    <th scope="col" class="px-md-5">Sala</th>
                    <th scope="col" class="px-md-5">Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr class="whitespace-no-wrap border-b">
                    <td
                        class="px-6 px-md-5 py-4 text-blue-600 text-sm leading-5">
                        {{ $team->name }}
                    </td>
                    <td class="px-6 px-md-5 py-4">
                        {{ $team->number }}
                    </td>
                    <td class="ml-4 px-6 px-md-5 py-4">
                        <span>{{ $team->room->name }}</span>
                    </td>
                    <td class="px-6 px-md-5 py-4 text-red-600 text-sm leading-5">
                        <button class="d-flex" type="submit" form="delete{{$team->id}}" name="delete" value="{{ $team->id }}">Deletar</button>
                    </td>
                    <form method="post" action="{{ route('turmas.destroy', $team->id) }}" id="delete{{$team->id}}" class="form-delete-data">
                        @csrf
                        {{ method_field('DELETE') }}
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center py-4">
        <a class="btn btn-primary outline-none shadow-none" href="{{ route('turmas.index') }}" role="button">Voltar</a>
    </div>
@endsection
