<!-- Doc Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_nombres', 'Doc Nombres:') !!}
    {!! Form::text('doc_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_apellidos', 'Doc Apellidos:') !!}
    {!! Form::text('doc_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_cedula', 'Doc Cedula:') !!}
    {!! Form::text('doc_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_direccion', 'Doc Direccion:') !!}
    {!! Form::text('doc_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_correo', 'Doc Correo:') !!}
    {!! Form::text('doc_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_sexo', 'Doc Sexo:') !!}
    {!! Form::text('doc_sexo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_especialidad', 'Doc Especialidad:') !!}
    {!! Form::text('doc_especialidad', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doc Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_estado', 'Doc Estado:') !!}
    {!! Form::number('doc_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('doctores.index') }}" class="btn btn-secondary">Cancel</a>
</div>
