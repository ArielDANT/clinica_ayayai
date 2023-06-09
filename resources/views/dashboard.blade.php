@extends('layouts.app')
@section('content')
<style>

    h1 {
      margin-top: 20px;

    }
    body{
    margin: 0;
    padding: 0;
    background: url(https://blogger.googleusercontent.com/img/a/AVvXsEiKOS7IENRXHhd81_Fy3eda9ZCuEBrfW3rkggGxkZhjJx-L6XGidQ1Yb0rsxJ4QCKaVoAFeOMaBeWk1dcx7RrOSCaDDBVPcfD_7CqOFbd6ehvyeoXopu1Xd3_nIVC_o6j7ML1Ug4uzxeawUbJEgwe24435FttAfKsPWKuliKJZBhr4zaF1Bo2VZw-XT);   
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

    .tit{
	font-size: 40px;
	color: white;
	margin-left: 180px;
	margin-right: 180px;
	margin-top: 30px;
	margin-bottom: 40px;
	padding-left: 20px;
	display: flex;
	flex-direction: row;
	justify-content: center;
	background-color: rgb(253,153,77,0.8);
	border-radius: 5px;
	flex: 1;
}
.opc{
	font-size: 40px;
	color: azure;
	margin: 50px;
	padding: 30px;
	display: flex;
	flex-direction: row;
}
.abo{
	color: beige;
	font-size: 20px;
	display: flex;
	flex-direction: row;
	justify-content: flex-end;
	margin right: 20px;
	padding: 15px;
}
.logo{
	width: 200px;
	margin: 20px;
	font-size: 14px;
	background-color: rgb(236,55,52,0.9); 
  border: none;
  color: white;
  padding: 15px;
  border-radius: 5px;

}
.contenedorImg{
	background-color: rgb(0,148,236,0.5);
	margin-left: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
	border-radius: 20px;
	display: flex;
	flex: 1;
	flex-direction: row;
	justify-content: center;
	color: black;
}
  </style>
</head>
<body>
	<div class="text-center">
  <h1>¡Bienvenido de nuevo! {{Auth::user()->usu_usuario}}</h1>
		<div class="tit">
			<b>¿Qué desea hacer?</b>
		</div>
</div>
		<div class="opc">
			<div img class="contenedorImg">
				<a class="nav-lin" href="{{ route('pacientes.index') }}">
				<input class="logo" type="submit" value="Registrar un nuevo paciente"></a>
			</div>
			<div img class="contenedorImg">
				<a class="nav-lin" href="{{ route('salas.index') }}">
				<input class="logo" type="submit" value="Ver salas..."></a>
			</div>
			<div img class="contenedorImg">
				<a class="nav-lin" href="{{ route('clinicas.index') }}">
				<input class="logo" type="submit" value="Administar Clínica y sucursales"></a>
			</div>
	</div>
<!-- 
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
</div> -->
@endsection
<!--  -->

