@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Citas</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Citas
                             <a class="pull-right" href="{{ route('citas.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                            <a class="pull-right" href="{{ route('citas.pdf') }}"><i class="fa fa-book">{{'PDF'}}</i> </a>
                             @include('citas.table')
                              <div class="pull-right mr-3">
                              </div>
                                 @if(count($citas)<=0)
                                    <tr>
                                        <td colspan="9"> <h4><b>No hay citas</b></h4></td>
                                    </tr>
                                @endif
                                     
                         </div>
                     </div>
                  </div>
             </div>
                          <div class="d-flex justify-content-center">  
                 {{ $citas->links()}}
                       </center>
             </div>
         </div>
    </div>
@endsection

