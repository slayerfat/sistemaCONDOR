<div class="form-group">
  {!! Form::label('title', 'Titulo:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Descripcion:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('event_type_id', 'Tipo de Evento:') !!}
  {!! Form::select('event_type_id', $types, $evento->message_type_id, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
