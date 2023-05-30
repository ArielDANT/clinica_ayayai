<!-- Pro Nombre Field -->
<div class="form-group">
    {!! Form::label('pro_nombre', 'Nombres:') !!}
    <p>{{ $proveedor->pro_nombre }}</p>
</div>

<!-- Pro Direccion Field -->
<div class="form-group">
    {!! Form::label('pro_direccion', 'Dirección:') !!}
    <p>{{ $proveedor->pro_direccion }}</p>
</div>

<!-- Pro Telefono Field -->
<div class="form-group">
    {!! Form::label('pro_telefono', 'Teléfono:') !!}
    <p>{{ $proveedor->pro_telefono }}</p>
</div>

<!-- Pro Correo Field -->
<div class="form-group">
    {!! Form::label('pro_correo', 'Correo:') !!}
    <p>{{ $proveedor->pro_correo }}</p>
</div>

<!-- Pro Cedula Field -->
<div class="form-group">
    {!! Form::label('pro_cedula', 'Cédula:') !!}
    <p>{{ $proveedor->pro_cedula }}</p>
</div>

<!-- Pro Descripcion Field -->
<div class="form-group">
    {!! Form::label('pro_descripcion', 'Descripción:') !!}
    <p>{{ $proveedor->pro_descripcion }}</p>
</div>

<!-- Pro Estado Field -->
<div class="form-group">
    {!! Form::label('pro_estado', 'Estado:') !!}
    <p>@if($proveedor->pro_estado == 1)
                Activo
                @else
                Inactivo
                @endif
               </p> 
</div>

