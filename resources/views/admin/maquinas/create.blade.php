@extends('home')

@section('crear/maquinas')
    @include('errors.error')
    {!!Form::open(['route'=>'admin.maquinas.store','method'=>'POST']) !!}
        @include('admin.maquinas.partials.fields')
        <button type="submit" class="btn btn-success">Crear</button>
    {!!Form::close()!!}

@endsection
