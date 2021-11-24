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
                            <div class="dropdown">
                                  <a class="nav-link btn btn-secondary bg-transparent border-0 dropdown-toggle" role="button"
                                  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{ Auth::user()->name }}
                                  </a>
                                <div class="dropdown-menu mt-10 ml-10 pl-2 opacity-75 bg-gray-500" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item d-flex text-white bg-transparent text-sm" href="{{ route('logout') }}" style="color:#c7c8bf;" onclick="event.preventDefault(); 
                                  document.getElementById('logout-form').submit();">Logout</a>
                                </div>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                                @csrf
                            </form>
                    @endguest
                </ul>
            </div>    
        </div>
    </nav>
    
@endsection
