<div class="form-group">
  {!! Form::label('apartment_id', 'Apartamentos en: '.$edificio->name) !!}
  {!! Form::select('apartment_id', $apartamentos, null, ['class' => 'form-control']) !!}
</div>
