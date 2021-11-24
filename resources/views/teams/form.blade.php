<div class="form-group mx-sm-3 mb-2">
    <label for="name" class="text-sm">Nome: </label>
    <input type="text" class="form-control rounded mt-1 uneditable-input outline-none shadow-none" id="name" name="name" placeholder="Digite o nome da turma"
    value="{{ $team->name ?? old('name') }}">
</div>
<div class="form-group mx-sm-3 mb-2">
    <label for="number" class="text-sm">Número: </label>
    <select class="form-select mt-1 uneditable-input outline-none shadow-none" id="number" name="number" value="{{ $team->number ?? old('number') }}">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
    <div class="form-group d-flex">
        <select class="form-control mt-2 uneditable-input outline-none shadow-none">
            <option value="">- Selecione a Sala -</option>
                @if ( isset($rooms) )
                    @if ( count($rooms) )
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    @endif
                @endif
        </select>
    </div>
</div>

<button type="submit" class="btn btn-primary mb-2 ml-4 outline-none shadow-none">Confirmar</button>
