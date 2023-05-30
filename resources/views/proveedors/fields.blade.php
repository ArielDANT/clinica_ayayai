<!-- Pro Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_nombre', 'Nombre:') !!}
    {!! Form::text('pro_nombre', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_direccion', 'Direccion:') !!}
    {!! Form::text('pro_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_telefono', 'Telefono:') !!}
    {!! Form::number('pro_telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_correo', 'Correo:') !!}
    {!! Form::text('pro_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_cedula', 'Cedula:') !!}
    {!! Form::number('pro_cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_descripcion', 'Descripcion:') !!}
    {!! Form::text('pro_descripcion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::select('pro_estado', ['1'=>'Activo' , '0'=>'Inactivo'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proveedors.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
