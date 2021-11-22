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
                    <tr class="whitespace-no-wrap border-b">
                        <td class="px-6 px-md-5 py-4 text-blue-600 text-sm leading-5">
                            {{ $room->name }}
                        </td>
                        <td class="px-6 px-md-5 py-4">
                            {{ $room->number }}
                        </td>
                        <td class="px-6 px-md-5 py-4 text-sm leading-5">
                            <a class="nav-link" href="{{ route('salas.edit', $room->id) }}">Atualizar Dados</a>
                            <a class="nav-link" href="{{ route('salas.show', $room->id) }}">Exibir Sala</a>
                            <button class="nav-link" type="submit" form="delete{{$room->id}}" name="delete" value="{{ $room->id }}">Deletar</button>
                            <form method="post" action="{{ route('salas.destroy', $room->id) }}" id="delete{{$room->id}}" class="form-delete-data">
                                @csrf
                                {{ method_field('DELETE') }}
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
