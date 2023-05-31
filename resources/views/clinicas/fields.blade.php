<!-- Cli Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_nombres', 'Nombres:') !!}
    {!! Form::text('cli_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Ruc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_ruc', 'Ruc:') !!}
    {!! Form::text('cli_ruc', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_telefono', 'Teléfono:') !!}
    {!! Form::text('cli_telefono', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_direccion', 'Dirección:') !!}
    {!! Form::text('cli_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_correo', 'Correo:') !!}
    {!! Form::text('cli_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clinicas.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
