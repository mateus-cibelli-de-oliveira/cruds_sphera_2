<div class="form-row">
    <div class="form-group col-md-30">
        <label for="name" class="mt-1">Empresa</label>
        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Digite o nome"
            value="{{ $company->name ?? old('name') }}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-30">
            <label for="cnpj" class="ls-label-text">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" class="form-control mt-1 ls-mask-cnpj"
                placeholder="xx.xxx.xxx/xxxx-xx" value="{{ $company->cnpj ?? old('cnpj') }}"
                onkeypress="$(this).mask('00.000.000/0000-00')">
        </div>
        <div class="form-row">
            <div class="form-group col-md-30">
                <label for="address" class="mt-1">Endereço</label>
                <input type="text" class="form-control mt-1" id="address" name="address" placeholder="Digite o endereço"
                    value="{{ $company->address ?? old('address') }}">
            </div>
        </div>

<button type="submit" class="btn btn-primary mt-4">Salvar</button>
