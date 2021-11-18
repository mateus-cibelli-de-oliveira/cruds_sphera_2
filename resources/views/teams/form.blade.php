<div class="form-group mx-sm-3 mb-2">
    <label for="name" class="sr-only">Nome</label>
    <input type="text" class="form-control rounded" id="name" name="name" placeholder="Ciências Humanas"
        value="{{ $team->name ?? old('name') }}">
</div>
<div class="form-group mx-sm-3 mb-2">
    <label for="number" class="sr-only">Número</label>
    <select class="form-select" id="number" name="number" value="{{ $team->number ?? old('number') }}">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
    <div class="form-group">
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
    </div>
</div>

<button type="submit" class="btn btn-primary mb-2 ml-4">Confirmar</button>
