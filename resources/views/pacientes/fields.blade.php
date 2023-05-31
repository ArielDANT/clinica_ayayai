<!-- Pac Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_nombres', 'Nombres:') !!}
    {!! Form::text('pac_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_apellidos', 'Apellidos:') !!}
    {!! Form::text('pac_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_cedula', 'Cédula:') !!}
    {!! Form::text('pac_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_direccion', 'Dirección:') !!}
    {!! Form::text('pac_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_celular', 'Celular:') !!}
    {!! Form::text('pac_celular', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_sexo', 'Sexo:') !!}
    {!! Form::text('pac_sexo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_correo', 'Correo:') !!}
    {!! Form::text('pac_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Repre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_repre', 'Representante:') !!}
    {!! Form::text('pac_repre', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pac Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pac_estado', 'Estado:') !!}
    {!! Form::number('pac_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
