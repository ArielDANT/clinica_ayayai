<!-- Sal Id Field -->
<div class="form-group">
    {!! Form::label('sal_id', 'Sala:') !!}
    <p>{{ $citas->sal_id }}</p>
</div>

<!-- Cit Fecha Field -->
<div class="form-group">
    {!! Form::label('cit_fecha', 'Fecha:') !!}
    <p>{{ $citas->cit_fecha }}</p>
</div>

<!-- Cit Documento Field -->
<div class="form-group">
    {!! Form::label('cit_documento', 'Documento:') !!}
    <p>{{ $citas->cit_documento }}</p>
</div>

<!-- Cit Estado Field -->
<div class="form-group">
    {!! Form::label('cit_estado', 'Estado:') !!}
    <p>@if($citas->cit_estado == 1)
        Registrado
        @else
        Anulado
        @endif</p>
</div>

