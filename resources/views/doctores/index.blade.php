@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Doctores</li>
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
                    <form action="{{route('doctores.index')}}" method="GET">
                        <div class="btn-group">
                            <input type="text" name="Busqueda..." class="form-control" value="{{ $busqueda}}">
                            <input type="submit" value="enviar" class="btn btn-primary">
                        </div>
                        
                    </form>
                             @include('doctores.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>

             </div>
           <center>
             <div class="d-flex justify-content-center">  
                 {{ $doctores->links()}}
                       </center>
             </div>

         </div>
    </div>
@endsection

