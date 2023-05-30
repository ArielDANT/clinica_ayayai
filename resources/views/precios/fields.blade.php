<!-- Pre Pvp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pre_pvp', 'Pre Pvp:') !!}
    {!! Form::number('pre_pvp', null, ['class' => 'form-control']) !!}
</div>

<!-- Pre Pvd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pre_pvd', 'Pre Pvd:') !!}
    {!! Form::number('pre_pvd', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('precios.index') }}" class="btn btn-secondary">Cancel</a>
</div>
