<div class="form-group has-feedback">

    {!!Form::label('nombre', 'Nombres')!!}
    {!!Form::text('nombres', null,['class'=>'form-control'])!!}

</div>

<div class="form-group has-success has-feedback">

    {!!Form::label('apellido', 'Apellidos')!!}
    {!!Form::text('apellidos', null,['class'=>'form-control'])!!}

</div>

<div class="form-group has-success has-feedback">

    {!!Form::label('cedulas', 'Cedula')!!}
    {!!Form::text('cedula', null,['class'=>'form-control'])!!}

</div>

<div class="form-group has-success has-feedback">

    {!!Form::label('email', 'Correo Electronico')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Introduce e-mail'])!!}


</div>

<div class="form-group ">

    {!!Form::label('tipo', 'Tipo')!!}
    {!!Form::select('type', array(''=>'Seleccione Tipo','entrenador' => 'Entrenador', 'deportista' => 'Deportista'),null,['class'=>'form-control'])!!}

</div>
<div class="hidden">

    {!!Form::password('password', null,['class'=>'form-control'])!!}

</div>

