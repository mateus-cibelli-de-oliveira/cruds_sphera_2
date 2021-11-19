<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" style="min-width:250px;" name="name" required
            autocomplete="name" autofocus value="{{ $user->name ?? old('name') }}">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mt-2">
    <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="min-width:250px;" name="email" required
            autocomplete="email" value="{{ $user->email ?? old('email') }}">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mt-2">
    <label for="cpf" class="col-md-4 col-form-label">{{ __('CPF') }}</label>

    <div class="col-md-6">
        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" style="min-width:250px;" name="cpf"
            onkeypress="$(this).mask('000.000.000-00');" required autocomplete="cpf" value="{{ $user->cpf ?? old('cpf') }}">

        @error('cpf')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mt-2">
    <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
        style="min-width:250px;" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mt-2">
    <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" style="min-width:250px;" name="password_confirmation" required
            autocomplete="new-password">
    </div>
</div>

<div class="form-group row mb-0 mt-2">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
