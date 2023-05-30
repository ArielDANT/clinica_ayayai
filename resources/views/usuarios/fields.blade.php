<!-- Epl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_id', 'Empleado:') !!}
    {!! Form::select('epl_id', $empleados, null, ['class' => 'form-control']) !!}
</div>

<!-- Usu Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usu_usuario', 'Usuario:') !!}
    {!! Form::text('usu_usuario', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Usu Perfil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usu_perfil', 'Perfil:') !!}
    {!! Form::select('usu_perfil', ['ADMINISTRADOR'=>'Administrador' , 'VENDEDOR' => 'Vendedor' , 'CONTADOR' => 'Contador' , 'MECANICO'=>'Mecanico' , 'USUARIO'=>'Usuario' ], null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
