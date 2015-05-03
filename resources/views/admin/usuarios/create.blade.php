@extends('home')
@section('crear/usuarios')

@include('errors.error')
    {!!Form::open(['route'=>'admin.crud.store','method'=>'POST']) !!}
    @include('admin.usuarios.partials.fields')
    <button type="submit" class="btn btn-success">Crear</button>
    {!!Form::close()!!}

@endsection
