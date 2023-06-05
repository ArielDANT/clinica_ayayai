<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PatioTuerca | Login {{ config('') }}</title>
    <meta name="description" content="CoreUI Template - InfyOm Laravel Generator">
    <meta name="keyword" content="CoreUI,Bootstrap,Admin,Template,InfyOm,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
    <link rel="shortcut icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjAP4KTrEZJDqL5OobEM8rxffXrsXkGdBzlMDFgf03ihZg4iXbxAwNox0KVsnbM1eqt9FwsrFOV-BQlM6Y_nMRTG3Z63vBVXdry87UDofzL2v9YSs3wq1O-3RC_Id0jJqOUu3mCZuoL7oD8av-PdHaG6xxVwMZ-ETOR1ZJKhnVRe2h7TnpZTE6nfXNn/s1600/fotor_2023-5-30_12_16_5-removebg-preview.png">
</head>

    <style>
        #lblInicio{
            color: #0F5095;
            font-family: Calibri;
        }
        #btnIng{
            background-color: #C0392B;
            font-family: Calibri;
        }
    </style>
<body class="app flex-row align-items-center" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <form method="post" action="{{ url('/login') }}">
                            @csrf
                            <center><img class="navbar-brand-full" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjiVsApcpks5NrdNipHOFUu8eaGjCeP1IJ_6g49a-iEbL7oLAcDry_iyO6zqyr8A9nzu9gBK59XeHCmeWVMQGZTuLVmWYHcZDTzPoLY6P2Wf_iQAnmkbWpWrt3ErAftQKzV_Y4jWGhTj7At_m-OQ9V4UPkNCZtx7U5obAblD_fn8F0KuSN9Q6nt-nfa/s320/fotor_2023-5-30_12_11_59-removebg-preview.png" width="210" height="90" ></center>
                            <h1 id="lblInicio"><b>Iniciar Sesión</b></h1>
                            <p class="text-muted">Ingresa tu cuenta para gestionar el sistema</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control {{ $errors->has('usu_usuario')?'is-invalid':'' }}" name="usu_usuario" value="{{ old('usu_usuario') }}"
                                       placeholder="Usuario">
                                @if ($errors->has('usu_usuario'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('usu_usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button id="btnIng" class="btn btn-danger" type="submit">
                                        <b>Ingresar</b>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
</body>
</html>
