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
  {!! Form::label('building_id', 'Asociado a Edifico:') !!}
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

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
