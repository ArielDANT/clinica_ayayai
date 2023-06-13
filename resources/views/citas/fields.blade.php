<!-- Sal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_id', 'Sal Id:') !!}
    {!! Form::select('sal_id', $salas, null, ['class' => 'form-control']) !!}
</div>

<!-- Cit Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cit_fecha', 'Cit Fecha:') !!}
    {!! Form::text('cit_fecha', null, ['class' => 'form-control','id'=>'cit_fecha']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#cit_fecha').datetimepicker({
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


<!-- Cit Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cit_documento', 'Cit Documento:') !!}
    {!! Form::text('cit_documento', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cit Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cit_estado', 'Cit Estado:') !!}
    {!! Form::number('cit_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancel</a>
</div>






<!-- Yo programo -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type=""></script>
<script type="text/javascript">
    $(document).on("blur","input[name=pac_descripcion]",()=>{
        $("#mld_pacientes").modal("show");
      getPaciente();
    });

    $(document).on("click",".btn-select",function(){
         $("#mld_pacientes").modal("hide");
         const pac_id=$(this).attr('pac_id');
         getPacienteById(pac_id);

    });



    async function getPacienteById(pac_id){
        const url=window.location;
        const res=await axios.post(url+"/GetPacienteById", {pac_id:pac_id});
        const paciente=res.data;
        $("input[name=pac_id]").val(paciente.pac_id);
        $("input[name=pac_descripcion]").val(`${paciente.pac_nombres} ${paciente.pac_apellidos} ${paciente.pac_cedula} ${paciente.pac_direccion} ${paciente.pac_celular} ${paciente.pac_sexo} ${paciente.pac_correo} ${paciente.pac_repre} `);

    }


    async  function getPaciente() {
        const url=window.location;
        const paciente=$("input[name=pac_descripcion]").val();
        const  response= await axios.post(url+"/busca_pacientes",{paciente:paciente});
        const result=response.data;
         
        let tbl=`<table class="table"><tr><th>Nombres</th><th>Apellidos</th><th>Cedula</th><th>Direccion</th><th>Celular</th><th>Sexo</th><th>Correo</th><th>Representante</th><th></th></tr>`;
        result.forEach((p)=>{
           tbl+=`<tr><td>${p.pac_nombres}</td><td>${p.pac_apellidos}</td><td>${p.pac_cedula}</td><td>${p.pac_direccion}</td><td>${p.pac_celular}</td><td>${p.pac_sexo}</td><td>${p.pac_correo}</td><td>${p.pac_repre}</td><td><span class='btn btn-info btn-sm btn-select' pac_id='${p.pac_id}'>&#x2713</span></td></tr>`;

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
     {!! Form::label('sal_id', 'Sala:') !!}
     {!! Form::select('sal_id', $salas ,null, ['class' =>  'form-control']) !!}
 </div>
 
 <!-- Inv Fecha Field -->
 <div class="form-group col-sm-6">
     {!! Form::label('cit_fecha', 'Fecha:') !!}
     {!! Form::text('cit_fecha', null, ['class' => 'form-control','id'=> 'inv_fecha']) !!}
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
     {!! Form::label('cit_documento', 'Documento:') !!}
     {!! Form::text('cit_documento', null, ['class' =>  'form-control','maxlength' => 255,'maxlength' => 255]) !!}
 </div>
 
 <!-- Inv Estado Field -->
 <div class="form-group col-sm-6">
     {!! Form::label('cit_estado', ' Estado:') !!}
     {!! Form::select('cit_estado', ['1'=>'Registrado' , '0'=>'Anulado'],  null, ['class' => 'form-control']) !!}
 </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-md-2">
     {!! Form::label('cid_obs', 'Observación:') !!}
     {!! Form::number('cid_obs', null, ['class' =>  'form-control']) !!}
     </div>
    <div class="form-group col-md-3">
    <label for=""> Pacientes </label>
     {!! Form::hidden('pac_id', null, ['class' =>  'form-control']) !!}
     {!! Form::text('pac_descripcion', null, ['class' =>  'form-control']) !!}
    </div>
    <div class="form-group col-md-2">
    <label for=""> Motivo </label>
     {!! Form::number('cid_mot', null, ['class' =>  'form-control']) !!}
    </div>
      <div class="form-group col-md-3">
    <label for=""> Estado </label>
     {!! Form::select('cid_estado', ['NUEVO'=> 'NUEVO', 'PUESTO'=>'PUESTO', 'HECHO' => 'HECHO'],null, ['class' =>  'form-control']) !!}
    </div>
    <div class="form-group col-md-1">
    <button type="submit" name="btn_guardar" value="btn_guardar"
     class="btn btn-primary">Guardar</button>
     <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</div>

<div class="row container">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Observación</th>
            <th>Paciente</th>
            <th>Motivo</th>
            <th>Estado</th>
        </tr>
        @isset($detalle)
        @foreach($detalle as $dt)
        <tr>
            <td>{{($loop->iteration)}}</td>
            <td>{{($dt->cid_obs)}}</td>
            <td>{{($dt->pac_apellidos)}}</td>
            <td>{{($dt->cid_mot)}}</td>
            <td>{{($dt->cid_estado)}}</td>
            <td>
             <i ivd_id="{{$dt->cid_id}}" class = "btn btn-danger btn-sm btn_delete fa fa-trash"></i>, 

             </td>

        </tr>
        @endforeach
        @endisset
</div>





<!-- Modal -->
<div class="modal fade" id="mld_pacientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de pacientes</h5>
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
