@extends('home')

@section('maquinas')

    <p>Hay {{$maquinas->total()}}  Maquinas</p>
    <table class="table table-condensed  ">
        <tr>
            <th class="info">#</th>
            <th class="info">Nombre</th>
            <th class="info">Descripcion</th>
            <th class="info">Numero De Serie</th>
            @if(strcmp(Auth::user()->type,'admin')==0)
                <th class="info">Acciones</th>
            @endif
        </tr>
        @foreach($maquinas as $ma)
            <tr>
                <td >{{$ma->id}}</td>
                <td >{{$ma->nombre}}</td>
                <td >{{$ma->descripcion}}</td>
                <td >{{$ma->serie}}</td>
                @if(strcmp(Auth::user()->type,'admin')==0)
                    <td >
                        <a href="{{route('admin.maquinas.edit',$ma)}}">Editar/Eliminar</a>
                    </td>
                @endif
            </tr>
        @endforeach

    </table>
@endsection