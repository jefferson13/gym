@extends('app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(strcmp(Auth::user()->type,'admin')==0 or strcmp(Auth::user()->type,'entrenador')==0)
                            @include('admin.menu')
                        @endif

                        @if(strcmp(Auth::user()->type,'deportista')==0)
                                {{Auth::user()->nombres}}
                                {{Auth::user()->apellidos}}
                        @endif
                    </div>
                    <div class="panel-body">
                        @yield('usuarios')
                        @yield('maquinas')
                        @yield('rutinas')
                        @if(strcmp(Auth::user()->type,'deportista')==0)
                            <span class="glyphicon glyphicon-warning-sign" aria-hidden="true">   En Construccion .!!! </span>
                        @endif
                        @yield('crear/usuarios')
                        @yield('crear/rutinas')
                        @yield('crear/maquinas')

                        @yield('editar/usuarios')
                        @yield('editar/rutinas')
                        @yield('editar/maquinas')
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
