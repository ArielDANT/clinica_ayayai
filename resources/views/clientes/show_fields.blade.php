<!-- Cli Nombres Field -->
<div class="form-group">
    {!! Form::label('cli_nombres', 'Nombres:') !!}
    <p>{{ $clientes->cli_nombres }}</p>
</div>

<!-- Cli Apellidos Field -->
<div class="form-group">
    {!! Form::label('cli_apellidos', 'Apellidos:') !!}
    <p>{{ $clientes->cli_apellidos }}</p>
</div>

<!-- Cli Cedula Field -->
<div class="form-group">
    {!! Form::label('cli_cedula', 'Cedula:') !!}
    <p>{{ $clientes->cli_cedula }}</p>
</div>

<!-- Cli Direccion Field -->
<div class="form-group">
    {!! Form::label('cli_direccion', 'Direccion:') !!}
    <p>{{ $clientes->cli_direccion }}</p>
</div>

<!-- Cli Celular Field -->
<div class="form-group">
    {!! Form::label('cli_celular', 'Celular:') !!}
    <p>{{ $clientes->cli_celular }}</p>
</div>

<!-- Cli Estado Field -->
<div class="form-group">
    {!! Form::label('cli_estado', 'Estado:') !!}
    <p>@if($clientes->cli_estado == 1)
                Activo
                @else
                Inactivo
                @endif</p>
</div>

