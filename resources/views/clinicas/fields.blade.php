<!-- Cli Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_nombres', 'Cli Nombres:') !!}
    {!! Form::text('cli_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Ruc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_ruc', 'Cli Ruc:') !!}
    {!! Form::text('cli_ruc', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_telefono', 'Cli Telefono:') !!}
    {!! Form::text('cli_telefono', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_direccion', 'Cli Direccion:') !!}
    {!! Form::text('cli_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_correo', 'Cli Correo:') !!}
    {!! Form::text('cli_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clinicas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
