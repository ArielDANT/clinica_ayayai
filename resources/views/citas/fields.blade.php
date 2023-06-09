<!-- Sal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sal_id', 'Sal Id:') !!}
    {!! Form::number('sal_id', null, ['class' => 'form-control']) !!}
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
