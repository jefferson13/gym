@extends('home')

@section('editar/maquinas')

    {!!Form::model($maquina,['route'=>['admin.maquinas.update',$maquina->id],'method'=>'PUT']) !!}
        @include('admin.maquinas.partials.fields')
        <button type="submit" class="btn btn-success">Modificar</button>
    {!!Form::close()!!}
    <hr>
    @include('admin.maquinas.partials.delete')

@endsection