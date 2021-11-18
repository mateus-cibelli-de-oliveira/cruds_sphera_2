@extends('_partials.app_config')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand px-2">SPHERA_PRINCIPAL</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('empresas.index') }}">Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('salas.index') }}">Salas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('turmas.index') }}">Turmas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif

                @else
                    <li class="nav-item">
                            <a class="nav-link" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </li>
        </div>
    </div>    
</nav>
@endsection
