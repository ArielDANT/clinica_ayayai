<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type=""></script>
<script type="text/javascript">
    $(document).on("blur","input[name=veh_descripcion]",()=>{
        $("#mld_autos").modal("show");
      getAuto();
    });

    $(document).on("click",".btn-select",function(){
         $("#mld_autos").modal("hide");
         const veh_id=$(this).attr('veh_id');
         getAutoById(veh_id);

    });



    async function getAutoById(veh_id){
        const url=window.location;
        const res=await axios.post(url+"/GetAutoById", {veh_id:veh_id});
        const auto=res.data;
        $("input[name=veh_id]").val(auto.veh_id);
        $("input[name=veh_descripcion]").val(`${auto.veh_marca} ${auto.veh_modelo} ${auto.veh_anio} ${auto.veh_subtipo} ${auto.veh_color} `);

    }


    async  function getAuto() {
        const url=window.location;
        const vehiculo=$("input[name=veh_descripcion]").val();
        const  response= await axios.post(url+"/busca_vehiculos",{vehiculo:vehiculo});
        const result=response.data;
         
        let tbl=`<table class="table"><tr><th>Marca</th><th>Modelo</th><th>Año></th><th>Kilometraje</th><th>Subtipo</th><th>Color</th><th></th></tr>`;
        result.forEach((v)=>{
           tbl+=`<tr><td>${v.veh_marca}</td><td>${v.veh_modelo}</td><td>${v.veh_anio}</td><td>${v.veh_kilometraje}</td><td>${v.veh_subtipo}</td><td>${v.veh_color}</td><td><span class='btn btn-info btn-sm btn-select' veh_id='${v.veh_id}'>&#x2713</span></td></tr>`;

        });
           tbl+=`</table>`;

        $("#datos").html(tbl);

    }

    $(document).on("click",".btn_delete",function(){
        const ivd_id=$(this).attr('ivd_id');
        $('#ivd_id').val(ivd_id);
        if (confirm('Desea Eliminar?')){
                  $("#frm_delete").submit();
        }
    })
     
</script>

<div  class="row">
 <!-- Pro Id Field -->
 <div class="form-group col-sm-6">
     {!! Form::label('pro_id', 'Proveedor:') !!}
     {!! Form::select('pro_id', $proveedores ,null, ['class' =>  'form-control']) !!}
 </div>
 
 <!-- Inv Fecha Field -->
 <div class="form-group col-sm-6">
     {!! Form::label('inv_fecha', 'Fecha:') !!}
     {!! Form::text('inv_fecha', null, ['class' => 'form-control','id'=> 'inv_fecha']) !!}
 </div>
 
 @push('scripts')
    <script type="text/javascript">
            $('#inv_fecha').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: true,
                icons: {
                    up: "icon-arrow-up-circle icons font-2xl",
                    down: "icon-arrow-down-circle icons font-2xl"
                },
                sideBySide: true
            })
        </script>
 @endpush
 
 
 <!-- Inv Documento Field -->
 <div class="form-group col-sm-6">
     {!! Form::label('inv_documento', 'Documento:') !!}
     {!! Form::text('inv_documento', null, ['class' =>  'form-control','maxlength' => 255,'maxlength' => 255]) !!}
 </div>
 
 <!-- Inv Estado Field -->
 <div class="form-group col-sm-6">
     {!! Form::label('inv_estado', ' Estado:') !!}
     {!! Form::select('inv_estado', ['1'=>'Registrado' , '0'=>'Anulado'],  null, ['class' => 'form-control']) !!}
 </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-md-1">
     {!! Form::label('ivd_cantidad', 'Cantidad:') !!}
     {!! Form::number('ivd_cantidad', null, ['class' =>  'form-control']) !!}
     </div>
    <div class="form-group col-md-3">
    <label for=""> Vehiculo </label>
     {!! Form::hidden('veh_id', null, ['class' =>  'form-control']) !!}
     {!! Form::text('veh_descripcion', null, ['class' =>  'form-control']) !!}
    </div>
    <div class="form-group col-md-2">
    <label for=""> Valor Unitario </label>
     {!! Form::number('ivd_vu', null, ['class' =>  'form-control']) !!}
    </div>
      <div class="form-group col-md-3">
    <label for=""> Estado </label>
     {!! Form::select('ivd_estado', ['NUEVO'=> 'NUEVO', 'USADO'=>'USADO', 'CHOCADO' => 'CHOCADO'],null, ['class' =>  'form-control']) !!}
    </div>
    <div class="form-group col-md-1">
    <button type="submit" name="btn_guardar" value="btn_guardar"
     class="btn btn-secondary">Guardar</button>
    </div>
</div>

<div class="row container">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Cantidad</th>
            <th>Vehiculo</th>
            <th>Valor Unitario</th>
            <th>Estado</th>
            <th>Valor Total</th>
        </tr>
        @isset($detalle)
        @foreach($detalle as $dt)
        <tr>
            <td>{{($loop->iteration)}}</td>
            <td>{{($dt->ivd_cantidad)}}</td>
            <td>{{($dt->veh_modelo)}}</td>
            <td>{{($dt->ivd_vu)}}</td>
            <td>{{($dt->ivd_estado)}}</td>
            <td>{{($dt->ivd_cantidad*$dt->ivd_vu)}}</td>
            <td>
             <i ivd_id="{{$dt->ivd_id}}" class = "btn btn-danger btn-sm btn_delete fa fa-trash"></i>, 

             </td>

        </tr>
        @endforeach
        @endisset
</div>





<!-- Modal -->
<div class="modal fade" id="mld_autos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de vehículos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="datos">
        ...
      </div>
    </div>
  </div>
</div>
