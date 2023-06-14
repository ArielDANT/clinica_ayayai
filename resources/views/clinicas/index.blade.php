@extends('layouts.app')

@section('content')
<style> 
body{
    margin: 0;
    padding: 0;
    background: url(https://img.freepik.com/vector-gratis/antecedentes-medicos-limpios_53876-97927.jpg?w=2000);   
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
</style>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Clínicas</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Clínicas
                             <a class="pull-right" href="{{ route('clinicas.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('clinicas.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
             <div class="d-flex justify-content-center">
                 {{ $clinicas->links() }}
             </div>
         </div>
    </div>
@endsection

