

<!-- Usu Usuario Field -->
<div class="form-group">
    {!! Form::label('usu_usuario', 'Usuario:') !!}
    <p>{{ $usuarios->usu_usuario }}</p>
</div>

<!-- Usu Perfil Field -->
<div class="form-group">
    {!! Form::label('usu_perfil', 'Perfil:') !!}
    <p>{{ $usuarios->usu_perfil }}</p>
</div>

<form action="{{route('change_password')}}" method="POST"> 
      @csrf 
     <input type="text" name="usu_id"value="{{ $usuarios->id}}">
     <div class="form-group">
         {!! Form::label('new_password', 'Nueva clave:') !!}
         <input type="password" class="form-control" name="new_password" id="new_password">
     </div>
     
     <div class="form-group">
         {!! Form::label('confirm_new_password', 'Confirme nueva clave:') !!}
         <input type="password" class="form-control" name="confirm_new_password" id="     confirm_new_password">
     </div>
     
     <div class="form-group" form="">
         <button type="submit" class="btn btn-ghost-success"> Actualizar</button>
     </div>

</form>
