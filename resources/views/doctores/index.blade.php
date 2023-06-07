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
        <li class="breadcrumb-item">Doctores a la fecha {{ $fecha }}</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Doctores
                             <a class="pull-right" href="{{ route('doctores.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">

                             @include('doctores.table')
                              <div class="pull-right mr-3">
                              </div>
                                @if(count($doctores)<=0)
                                    <tr>
                                        <td colspan="9"> <h4><b>No hay resultados para la búsqueda, intenta buscar mediante los apellidos o la cédula.</b></h4></td>
                                    </tr>
                                @endif
                         </div>
                     </div>
                  </div>

             </div>
           <center>
            

         </div>
    </div>
@endsection

