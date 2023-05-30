<!-- Pro Id Field -->
<div class="form-group">
    {!! Form::label('pro_id', 'Proovedor:') !!}
    <p>{{ $inventario->pro_id }}</p>
</div>

<!-- Inv Fecha Field -->
<div class="form-group">
    {!! Form::label('inv_fecha', 'Fecha:') !!}
    <p>{{ $inventario->inv_fecha }}</p>
</div>

<!-- Inv Documento Field -->
<div class="form-group">
    {!! Form::label('inv_documento', 'Documento:') !!}
    <p>{{ $inventario->inv_documento }}</p>
</div>

<!-- Inv Estado Field -->
<div class="form-group">
    {!! Form::label('inv_estado', 'Estado:') !!}
    <p>@if($inventario->inv_estado ==1)
                Activo
                @else
                Inactivo
                @endif
    </p>
</div>

