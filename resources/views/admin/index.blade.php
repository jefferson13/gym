@extends('app_admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Creaciones</div>
                        <div class="panel-body" >
                            <a class="btn btn-success" href=" {{route('admin.crud.create')}}" role= "button">
                                Nuevo Usuario
                            </a>

                            <a class="btn btn-info" href=" {{route('admin.maquinas.create')}}" role= "button">
                                Nueva Maquina
                            </a>

                            <a class="btn btn-danger" href=" {{route('admin.rutinas.create')}}" role= "button">
                                Nueva Rutina
                            </a>

                            <hr>
                            <p>Hay {{$users->total()}} Usuarios</p>
                            <table class="table table-condensed" >
                                <tr>
                                    <th class="success">#</th>
                                    <th class="success">Nombre</th>
                                    <th class="success">Apellidos</th>
                                    <th class="success">Cedula</th>
                                    <th class="success">Correo</th>
                                    <th class="success">Tipo</th>
                                    <th class="success">Acciones</th>
                                </tr>
                                @foreach($users as $user)
                                <tr>
                                    <td >{{$user->id}}</td>
                                    <td >{{$user->nombres}}</td>
                                    <td >{{$user->apellidos}}</td>
                                    <td >{{$user->cedula}}</td>
                                    <td >{{$user->email}}</td>
                                    <td >{{$user->type}}</td>

                                    <td >
                                        <a href="{{route('admin.crud.edit',$user)}}">Editar/Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <hr>
                            <p>Hay {{$maquinas->total()}}  Maquinas</p>
                            <table class="table table-condensed  ">
                                <tr>
                                    <th class="info">#</th>
                                    <th class="info">Nombre</th>
                                    <th class="info">Descripcion</th>
                                    <th class="info">Numero De Serie</th>
                                    <th class="info">Acciones</th>
                                </tr>
                                @foreach($maquinas as $ma)
                                    <tr>
                                        <td >{{$ma->id}}</td>
                                        <td >{{$ma->nombre}}</td>
                                        <td >{{$ma->descripcion}}</td>
                                        <td >{{$ma->serie}}</td>
                                        <td >
                                            <a href="{{route('admin.maquinas.edit',$ma)}}">Editar/Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <hr>
                            <p>Hay {{$rutinas->total()}}  Rutinas</p>
                            <table class="table table-condensed " >
                                <tr>
                                    <th class="danger">#</th>
                                    <th class="danger">Nombre</th>
                                    <th class="danger">Duracion</th>
                                    <th class="danger">Numero De Series</th>
                                    <th class="danger">Regularidad</th>
                                    <th class="danger">Otros</th>
                                    <th class="danger">Acciones</th>
                                </tr>
                                @foreach($rutinas as $ru)
                                    <tr>
                                        <td >{{$ru->id}}</td>
                                        <td >{{$ru->nombre}}</td>
                                        <td >{{$ru->duracion}}</td>
                                        <td >{{$ru->numero_series}}</td>
                                        <td >{{$ru->regularidad}}</td>
                                        <td >{{$ru->otros}}</td>
                                        <td >
                                            <a href="{{route('admin.rutinas.edit',$ru)}}">Editar/Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
