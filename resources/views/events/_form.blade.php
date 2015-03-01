<div class="form-group">
  {!! Form::label('title', 'Titulo:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('body', 'Descripcion:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('event_type_id', 'Tipo de Evento:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::select('event_type_id', $types, $evento->message_type_id, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('building_id', 'Asociado a:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <select class="form-control" name="building_id">
      @foreach ($usuario->apartamentos as $apartamento)
        @if ($apartamento->edificio->id === $evento->building_id)
          <option value="{{ $apartamento->edificio->id }}" selected="selected">
        @else
          <option value="{{ $apartamento->edificio->id }}">
        @endif
          {{ $apartamento->edificio->name }}
        </option>
      @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>
