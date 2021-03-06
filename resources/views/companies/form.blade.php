@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="form-row">
    <div class="form-group col-md-30">
        <label for="name" class="text-sm mt-1">Empresa: </label>
        <input type="text" class="form-control mt-1 uneditable-input outline-none shadow-none" id="name" name="name" placeholder="Digite o nome"
            value="{{ $company->name ?? old('name') }}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-30">
            <label for="cnpj" class="ls-label-text text-sm mt-1">CNPJ: </label>
            <input type="text" id="cnpj" name="cnpj" class="form-control mt-1 ls-mask-cnpj uneditable-input outline-none shadow-none"
                placeholder="xx.xxx.xxx/xxxx-xx" value="{{ $company->cnpj ?? old('cnpj') }}"
                onkeypress="$(this).mask('00.000.000/0000-00')">
        </div>
        <div class="form-row">
            <div class="form-group col-md-30">
                <label for="address" class="text-sm mt-1">Endereço: </label>
                <input type="text" class="form-control mt-1 uneditable-input outline-none shadow-none" id="address" name="address" placeholder="Digite o endereço"
                    value="{{ $company->address ?? old('address') }}">
            </div>
        </div>

<button type="submit" class="btn btn-primary mt-4 outline-none shadow-none">Salvar</button>
