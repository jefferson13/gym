@extends('home')

@section('rutinas')

    <p>Hay {{$rutinas->total()}}  Rutinas</p>
    <table class="table table-condensed " >
        <tr>
            <th class="danger">#</th>
            <th class="danger">Nombre</th>
            <th class="danger">Duracion</th>
            <th class="danger">Numero De Series</th>
            <th class="danger">Regularidad</th>
            <th class="danger">Otros</th>
            @if(strcmp(Auth::user()->type,'admin')==0)
                <th class="danger">Acciones</th>
            @endif
        </tr>
        @foreach($rutinas as $ru)
            <tr>
                <td >{{$ru->id}}</td>
                <td >{{$ru->nombre}}</td>
                <td >{{$ru->duracion}}</td>
                <td >{{$ru->numero_series}}</td>
                <td >{{$ru->regularidad}}</td>
                <td >{{$ru->otros}}</td>
                @if(strcmp(Auth::user()->type,'admin')==0)
                    <td >
                        <a href="{{route('admin.rutinas.edit',$ru)}}">Editar/Eliminar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </table>

@endsection