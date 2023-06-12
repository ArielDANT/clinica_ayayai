<!DOCTYPE <!DOCTYPE HTML>
<html lang="en">
<head>

    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <!-- Theme style -->
   
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">

     <!-- PRO version // if you have PRO version licence than remove comment and use it. -->
    {{--<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/brand.min.css">--}}
    {{--<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@1.0.0/css/flag.min.css">--}}
     <!-- PRO version -->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
</head>
<body>
	<style>
		.lblXD{
			background: rgb(0, 128, 0, 0.48);
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
	</style>
	<div class="row">
		<img class="navbar-brand-full" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjiVsApcpks5NrdNipHOFUu8eaGjCeP1IJ_6g49a-iEbL7oLAcDry_iyO6zqyr8A9nzu9gBK59XeHCmeWVMQGZTuLVmWYHcZDTzPoLY6P2Wf_iQAnmkbWpWrt3ErAftQKzV_Y4jWGhTj7At_m-OQ9V4UPkNCZtx7U5obAblD_fn8F0KuSN9Q6nt-nfa/s320/fotor_2023-5-30_12_11_59-removebg-preview.png" width="125" height="55"></div>
		<div class="tit">
		<h1>Lista de Doctores</h1>
	</div>
	<div class="">
    <table class="table table-striped" id="doctores-table">
        <thead>
            <tr class="lblXD">
            	<th>Sala</th>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th>Dirrección</th>
        <th>Correo</th>
        <th>Sexo</th>
        <th>Hora de entrada</th>
        <th>Hora de salida</th>
        <th>Estado</th>
            </tr>
        </thead>
        <tbody>


        @foreach($doctores as $doctores)
            <tr>
            	<td>{{ $doctores->sal_nombre}}</td>
                <td>{{ $doctores->doc_nombres }}</td>
            <td>{{ $doctores->doc_apellidos }}</td>
            <td>{{ $doctores->doc_cedula }}</td>
            <td>{{ $doctores->doc_direccion}}</td>
            <td>{{ $doctores->doc_correo }}</td>
            <td>{{ $doctores->doc_sexo }}</td>
            <td>{{ $doctores->doc_horaon }}</td>
            <td>{{ $doctores->doc_horaoff }}</td>
            <td>@if($doctores->doc_estado == 1)
                Activo
                @else
                Inactivo
                @endif
            </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>