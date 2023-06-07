@extends('layouts.app')

@section('content')
<style> 
body{
    margin: 0;
    padding: 0;
    background: url(https://img.freepik.com/vector-gratis/fondo-dibujado-mano-dia-nacional-medico_23-2149438162.jpg?w=2000);   
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
</style>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Salas</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Salas
                             <a class="pull-right" href="{{ route('salas.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('salas.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

