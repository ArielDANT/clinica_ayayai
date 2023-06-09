<!-- Sal Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('sal_id', 'Sala:') !!}
    <p>{{ $doctores->sal_id }}</p>
</div>

<!-- Doc Nombres Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_nombres', 'Nombres:') !!}
    <p>{{ $doctores->doc_nombres }}</p>
</div>

<!-- Doc Apellidos Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_apellidos', 'Apellidos:') !!}
    <p>{{ $doctores->doc_apellidos }}</p>
</div>

<!-- Doc Cedula Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_cedula', 'Cédula:') !!}
    <p>{{ $doctores->doc_cedula }}</p>
</div>

<!-- Doc Direccion Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_direccion', 'Dirección:') !!}
    <p>{{ $doctores->doc_direccion }}</p>
</div>

<!-- Doc Correo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_correo', 'Correo:') !!}
    <p>{{ $doctores->doc_correo }}</p>
</div>

<!-- Doc Sexo Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_sexo', 'Sexo:') !!}
    <p>{{ $doctores->doc_sexo }}</p>
</div>

<!-- Doc Especialidad Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_horaon', 'Horario de entrada:') !!}
    <p>{{ $doctores->doc_horaon }}</p>
</div>

<!-- Doc Especialidad Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_horaoff', 'Horario de salida:') !!}
    <p>{{ $doctores->doc_horaoff }}</p>
</div>

<!-- Doc Estado Field -->
<div class="form-group col-sm-3">
    {!! Form::label('doc_estado', 'Estado:') !!}
    <p>@if($doctores->doc_estado == 1)
                Activo
                @else
                Inactivo
                @endif</p>
</div>

