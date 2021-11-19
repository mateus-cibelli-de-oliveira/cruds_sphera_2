@extends('_partials.app_config')

@section('title')
Página Principal
@endsection

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand px-2" href="#">CRUD_TURMAS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('turmas.create') }}">Criar nova Turma</a>
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
                @foreach ($teams as $team)
                    <tr class="whitespace-no-wrap border-b">
                        <td class="px-6 px-md-5 py-4 text-blue-600 text-sm leading-5">
                            {{ $team->name }}
                        </td>
                        <td class="px-6 px-md-5 py-4">
                            {{ $team->number }}
                        </td>
                        <select name="room_id" id="room_id" class="form-control mt-2">
                            <option value="">- Selecione a Sala -</option>
                            @if (isset($rooms))
                                @if (count($rooms))
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                @endif
                            @endif
                        </select>
                        <td class="px-6 px-md-5 py-4 text-sm leading-5">
                            <a class="nav-link" href="{{ route('turmas.edit') }}">Atualizar Dados</a>
                            <a class="nav-link" href="{{ route('turmas.show') }}">Exibir Turma</a>
                            <a class="nav-link" href="{{ route('turmas.destroy', $team->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endsection
