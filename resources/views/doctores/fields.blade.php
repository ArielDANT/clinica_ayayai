<!-- Doc Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_nombres', 'Nombres:') !!}
    {!! Form::text('doc_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_apellidos', 'Apellidos:') !!}
    {!! Form::text('doc_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_cedula', 'Cédula:') !!}
    {!! Form::text('doc_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_direccion', 'Dirección:') !!}
    {!! Form::text('doc_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_correo', 'Correo:') !!}
    {!! Form::text('doc_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_sexo', 'Sexo:') !!}
    {!! Form::text('doc_sexo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_especialidad', 'Especialidad:') !!}
    {!! Form::text('doc_especialidad', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_estado', 'Estado:') !!}
    {!! Form::number('doc_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('doctores.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
