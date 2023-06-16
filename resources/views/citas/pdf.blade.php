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
        margin-top: 10px;
        margin-bottom: 40px;
        padding-left: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        background-color: rgb(253,153,77,0.8);
        border-radius: 5px;
        flex: 1;
    }
    </style>
    <div class="row">
        <img class="navbar-brand-full" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjiVsApcpks5NrdNipHOFUu8eaGjCeP1IJ_6g49a-iEbL7oLAcDry_iyO6zqyr8A9nzu9gBK59XeHCmeWVMQGZTuLVmWYHcZDTzPoLY6P2Wf_iQAnmkbWpWrt3ErAftQKzV_Y4jWGhTj7At_m-OQ9V4UPkNCZtx7U5obAblD_fn8F0KuSN9Q6nt-nfa/s320/fotor_2023-5-30_12_11_59-removebg-preview.png" width="125" height="55"></div>
        <div class="tit">
        <h1>Lista de Citas</h1>
    </div>
    <div class="">
    <table class="table table-striped" id="citas-table">
        <thead>
            <tr class="lblXD">
                <th>Paciente</th>
        <th>Fecha</th>
        <th>Documento</th>
        <th>Estado</th>
        <th>Observación</th>
        <th>Motivo</th>
        <th>Sala</th>
            </tr>
        </thead>
        <tbody>

        @foreach($citas as $citas)
            <tr>
                <td>{{ $citas->pac_nombres}}</td>
                <td>{{ $citas->cit_fecha}}</td>
                <td>{{ $citas->cit_documento }}</td>
                <td>@if($citas->cit_estado ==1)
                    Registrado
                    @else
                    Anulado
                    @endif</td>
                <td>{{ $citas->cid_obs }}</td>
                <td>{{ $citas->cid_mot }}</td>
                <td>{{ $citas->sal_id }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>