@extends('home')

@section('editar/rutinas')

    {!!Form::model($rutina,['route'=>['admin.rutinas.update',$rutina->id],'method'=>'PUT']) !!}
        @include('admin.rutinas.partials.fields')
        <button type="submit" class="btn btn-success">Modificar</button>
    {!!Form::close()!!}
    <hr>
    @include('admin.rutinas.partials.delete')

@endsection