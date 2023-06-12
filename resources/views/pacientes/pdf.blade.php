<!DOCTYPE HTML>
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
        .det{
            margin-left: -29px;
        }
    </style>
    <div class="row">
        <img class="navbar-brand-full" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjiVsApcpks5NrdNipHOFUu8eaGjCeP1IJ_6g49a-iEbL7oLAcDry_iyO6zqyr8A9nzu9gBK59XeHCmeWVMQGZTuLVmWYHcZDTzPoLY6P2Wf_iQAnmkbWpWrt3ErAftQKzV_Y4jWGhTj7At_m-OQ9V4UPkNCZtx7U5obAblD_fn8F0KuSN9Q6nt-nfa/s320/fotor_2023-5-30_12_11_59-removebg-preview.png" width="125" height="55"></div>
        <div class="tit">
        <h1>Lista de Pacientes</h1>
    </div>
    <div class="det">
    <table class="table table-striped" id="doctores-table">
        <thead>
            <tr class="lblXD">
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th>Dirrección</th>
        <th>Teléfono</th>
        <th>Sexo</th>
        <th>Correo</th>
        <th>Representante</th>
        <th>Estado</th>
            </tr>
        </thead>
        <tbody>


        @foreach($pacientes as $pacientes)
            <tr>
                <td>{{ $pacientes->pac_nombres}}</td>
                <td>{{ $pacientes->pac_apellidos }}</td>
            <td>{{ $pacientes->pac_cedula }}</td>
            <td>{{ $pacientes->pac_direccion }}</td>
            <td>{{ $pacientes->pac_celular}}</td>
            <td>{{ $pacientes->pac_sexo }}</td>
            <td>{{ $pacientes->pac_correo }}</td>
            <td>{{ $pacientes->pac_repre }}</td>
            <td> @if($pacientes->pac_estado == 1)
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