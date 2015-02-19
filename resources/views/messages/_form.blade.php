<div class="form-group">
  {!! Form::label('title', 'Titulo:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Descripcion:') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('message_types_id', 'Tipo de Mensaje:') !!}
  {!! Form::select('message_types_id', $types, $mensaje->message_types_id, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
