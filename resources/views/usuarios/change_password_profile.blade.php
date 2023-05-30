@extends('layouts.app')
@section('content')
<h1>Cambiar Contraseña </h1>
<div class="container"> 
<form action="{{ route ('change_password_profile')}}" method="POST">
	@csrf
	<div class="row">
		<div class="col-md-4">
	     <label for="nueva_clave">Nueva Clave</label>
         <input type="password" class="form-control" id="nueva_clave" name="nueva_clave">
        </div>
	</div>
	<div class="row">
		<div class="col-md-4">
	     <label for="confirmar_nueva_clave">Confirmar Nueva Clave</label>
         <input type="password" class="form-control" id="confirmar_nueva_clave" name="confirmar_nueva_clave">
        </div>
	</div>
	<div class="row">
		<div class="col-md-4">	
	      	<button type="submit" name="btn_change" value="btn_change">Cambiar</button>
	      </div>
    </div>
</form>
</div>
@endsection
