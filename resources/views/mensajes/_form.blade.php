<div class="form-group">
  {!! Form::label('titulo', 'Titulo:') !!}
  {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('descripcion', 'Descripcion:') !!}
  {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
