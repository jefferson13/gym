@extends('home')

@section('crear/rutinas')
    @include('errors.error')
    {!!Form::open(['route'=>'admin.rutinas.store','method'=>'POST']) !!}
        @include('admin.rutinas.partials.fields')
        <button type="submit" class="btn btn-success">Crear</button>
    {!!Form::close()!!}
@endsection
