<!-- Cli Id Field -->
<div class="form-group">
    {!! Form::label('cli_id', 'Clínica:') !!}
    <p>{{ $salas->cli_id }}</p>
</div>

<!-- Sal Nombre Field -->
<div class="form-group">
    {!! Form::label('sal_nombre', 'Nombre:') !!}
    <p>{{ $salas->sal_nombre }}</p>
</div>

<!-- Sal Descripcion Field -->
<div class="form-group">
    {!! Form::label('sal_descripcion', 'Descripcion:') !!}
    <p>{{ $salas->sal_descripcion }}</p>
</div>

<!-- Sal Piso Field -->
<div class="form-group">
    {!! Form::label('sal_piso', 'Piso:') !!}
    <p>{{ $salas->sal_piso }}</p>
</div>

<!-- Sal Numsal Field -->
<div class="form-group">
    {!! Form::label('sal_numsal', 'Número de sala:') !!}
    <p>{{ $salas->sal_numsal }}</p>
</div>

<!-- Sal Estado Field -->
<div class="form-group">
    {!! Form::label('sal_estado', 'Estado:') !!}
    <p>@if($salas->sal_estado == 1)
                Activo
                @else
                Inactivo
                @endif
                </p>
</div>

