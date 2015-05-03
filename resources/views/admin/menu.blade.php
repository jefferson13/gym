
@if(strcmp(Auth::user()->type,'admin')==0 or strcmp(Auth::user()->type,'entrenador')==0)

    <a class="btn btn-info" href=" {{url('usuarios')}}" role= "button">
        Ver Usuarios
    </a>

    <a class="btn btn-danger" href=" {{url('maquinas')}}" role= "button">
        Ver Maquinas
    </a>

    <a class="btn btn-info" href=" {{url('rutinas')}}" role= "button">
        Ver Rutinas
    </a>

    <a class="btn btn-danger" href=" {{route('admin.rutinas.create')}}" role= "button">
        Crear Rutinas
    </a>

@endif

@if(strcmp(Auth::user()->type,'admin')==0)
    <a class="btn btn-danger" href=" {{route('admin.crud.create')}}" role= "button">
        Crear Usuarios
    </a>

    <a class="btn btn-info" href=" {{route('admin.maquinas.create')}}" role= "button">
        Crear Maquinas
    </a>
@endif