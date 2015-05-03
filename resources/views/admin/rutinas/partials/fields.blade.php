<div class="form-group has-feedback">

    {!!Form::label('nombre', 'Nombre')!!}
    {!!Form::text('nombre', null,['class'=>'form-control'])!!}

</div>

<div class="form-group has-success has-feedback">

    {!!Form::label('duracion', 'Duracion (min)')!!}
    {!!Form::text('duracion', null,['class'=>'form-control'])!!}

</div>

<div class="form-group has-success has-feedback">

    {!!Form::label('num_series', 'Numero De Series')!!}
    {!!Form::number('numero_series', null,['class'=>'form-control'])!!}

</div>

<div class="form-group has-success has-feedback">

    {!!Form::label('regularidad', 'Regularidad')!!}
    {!!Form::text('regularidad',null,['class'=>'form-control'])!!}


</div>
<div class="form-group has-success has-feedback">

    {!!Form::label('otros', 'Otros')!!}
    {!!Form::text('otros',null,['class'=>'form-control'])!!}


</div>



