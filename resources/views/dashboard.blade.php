@extends('layouts.app')
@section('content')
<style>

    h1 {
      margin-top: 20px;

    }

    .tit{
	font-size: 40px;
	color: black;
	margin-left: 10px;
	margin-right: 50px;
	margin-top: 30px;
	margin-bottom: 40px;
	padding-left: 20px;
	display: flex;
	flex-direction: row;
	justify-content: center;
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

}
.contenedorImg{
	background-color: rgb(235, 240, 229);
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

		<div class="opc">
			<div img class="contenedorImg">
				NADA
			</div>
			<div img class="contenedorImg">
				<img src="Barcelona.png" class="logo">
			</div>
			<div img class="contenedorImg">
				<img src="Orense.png" class="logo">
			</div>
	</div>

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
</div>
@endsection
<!--  -->

