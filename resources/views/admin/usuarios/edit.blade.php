@extends('home')

@section('editar/usuarios')
    {!!Form::model($user,['route'=>['admin.crud.update',$user->id],'method'=>'PUT']) !!}
        @include('admin.usuarios.partials.fields')
        <button type="submit" class="btn btn-success">Modificar</button>
    {!!Form::close()!!}
    <hr>
    @include('admin.usuarios.partials.delete')

@endsection