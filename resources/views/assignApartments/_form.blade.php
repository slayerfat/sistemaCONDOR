<div class="form-group">
  {!! Form::label('apartment_id', 'Apartamentos en: '.$edificio->name, ['class' => 'col-md-4 control-label']) !!}
  <div class="col-md-8">
    {!! Form::select('apartment_id', $apartamentos, null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>
