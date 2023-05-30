<!-- Emp Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_nombres', 'Empresa:') !!}
    {!! Form::text('emp_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Emp Ruc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_ruc', 'Ruc:') !!}
    {!! Form::text('emp_ruc', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Emp Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_telefono', 'Teléfono:') !!}
    {!! Form::text('emp_telefono', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Emp Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_direccion', 'Dirección:') !!}
    {!! Form::text('emp_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Emp Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_correo', 'Correo:') !!}
    {!! Form::text('emp_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
