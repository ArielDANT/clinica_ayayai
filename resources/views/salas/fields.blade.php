<!-- Cli Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_id', 'Cli Id:') !!}
    {!! Form::select('cli_id', $clinicas, null, ['class' => 'form-control']) !!}
</div>

<!-- Sal Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_nombre', 'Sal Nombre:') !!}
    {!! Form::text('sal_nombre', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sal Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_descripcion', 'Sal Descripcion:') !!}
    {!! Form::text('sal_descripcion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sal Piso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_piso', 'Sal Piso:') !!}
    {!! Form::text('sal_piso', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sal Numsal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_numsal', 'Sal Numsal:') !!}
    {!! Form::text('sal_numsal', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sal Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_estado', 'Sal Estado:') !!}
    {!! Form::select('sal_estado', ['1'=>'Activo' , '0'=>'Inactivo'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('salas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
