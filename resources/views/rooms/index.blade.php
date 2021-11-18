@extends('_partials.app_config')

@section('title')
Página Principal
@endsection

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand px-2" href="#">HOME_SALAS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('salas.create') }}">Criar nova Sala</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mb-4 mt-5">
        <h1 class="d-flex justify-content-center text-3xl"><b>Listagem Geral</b></h1>
    </div>

    <div class="d-flex justify-content-center">

        <table class="mt-4">

            <thead>
                <tr class="whitespace-no-wrap border-b border-gray-800 text-sm leading-10">
                    <th scope="col" class="px-md-5">Nome</th>
                    <th scope="col" class="px-md-5">Número</th>
                    <th scope="col" class="px-md-5">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td
                            class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                            {{ $room->name }}
                        </td>
                        <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b border-gray-500">
                            {{ $room->number }}
                        </td>
                        <td
                            class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
                            <a class="nav-link" href="{{ route('salas.edit') }}">Atualizar Dados</a>
                            <a class="nav-link" href="{{ route('salas.show') }}">Exibir Sala</a>
                            <a href="{{ route('salas.destroy', $room->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
