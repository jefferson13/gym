
@extends('home')

@section('usuarios')

    <p>Hay {{$users->total()}} Usuarios</p>
    <table class="table table-condensed" >
        <tr>
            <th class="success">#</th>
            <th class="success">Nombre</th>
            <th class="success">Apellidos</th>
            <th class="success">Cedula</th>
            <th class="success">Correo</th>
            <th class="success">Tipo</th>
            @if(strcmp(Auth::user()->type,'admin')==0)
                <th class="success">Acciones</th>
            @endif
        </tr>
        @foreach($users as $user)
            <tr>
                @if(strcmp(Auth::user()->type,'entrenador')==0 and strcmp($user->type,'deportista')==0 or strcmp(Auth::user()->type,'admin')==0)
                <td >{{$user->id}}</td>
                <td >{{$user->nombres}}</td>
                <td >{{$user->apellidos}}</td>
                <td >{{$user->cedula}}</td>
                <td >{{$user->email}}</td>
                <td >{{$user->type}}</td>
                @endif
                @if(strcmp(Auth::user()->type,'admin')==0)
                    <td >
                        <a href="{{route('admin.crud.edit',$user)}}">Editar/Eliminar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </table>

@endsection