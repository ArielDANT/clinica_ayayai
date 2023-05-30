@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('inventarios.index') !!}">Inventario</a>
          </li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar inventario</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($inventario, ['route' => ['inventarios.update', $inventario->inv_id], 'method' => 'patch']) !!}

                              @include('inventarios.fields')

                              {!! Form::close() !!}
                              <form action="{{route ('destroy_dt')}}"
                              method="POST"
                              id="frm_delete">
                              @csrf
                              <input type="hidden" id="ivd_id" name="ivd_id" value="0">
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection