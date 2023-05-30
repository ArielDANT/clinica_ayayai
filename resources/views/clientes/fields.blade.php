<!-- Cli Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_nombres', 'Nombres:') !!}
    {!! Form::text('cli_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_apellidos', 'Apellidos:') !!}
    {!! Form::text('cli_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_cedula', 'Cedula:') !!}
    {!! Form::text('cli_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_direccion', 'Direccion:') !!}
    {!! Form::text('cli_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_celular', 'Celular:') !!}
    {!! Form::text('cli_celular', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_estado', 'Estado:') !!}
    {!! Form::select('cli_estado', ['1'=>'Activo' , '0'=>'Inactivo'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
