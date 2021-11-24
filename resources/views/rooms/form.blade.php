<div class="form-group mx-sm-3 mb-2">
    <label for="name" class="text-sm">Nome: </label>
    <input type="text" class="form-control rounded mt-1 uneditable-input outline-none shadow-none" id="name" name="name" placeholder="Ciências Humanas"
        value="{{ $room->name ?? old('name') }}">
</div>
<div class="form-group mx-sm-3 mb-2">
    <label for="number" class="text-sm">Numero: </label>
    <select class="form-select mt-1 uneditable-input outline-none shadow-none" id="number" name="number">
        <option>101</option>
        <option>102</option>
        <option>103</option>
        <option>104</option>
        <option>105</option>
    </select>
</div>

<button type="submit" class="btn btn-primary mb-2 ml-4 outline-none shadow-none">Confirmar</button>
