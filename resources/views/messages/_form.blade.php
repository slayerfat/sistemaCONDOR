<div class="form-group">
  {!! Form::label('title', 'Titulo:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Descripcion:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('message_type_id', 'Tipo de Mensaje:') !!}
  {!! Form::select('message_type_id', $types, $mensaje->message_type_id, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('building_id', 'Edificios asociados a sus apartamentos:') !!}
  <select name="building_id" id="building_id" class="form-control">
    @foreach (Auth::user()->apartamentos as $apartamento)
      @if ($mensaje->building_id === $apartamento->building_id)
        <option value="{{ $apartamento->building_id }}" selected="selected">
          Edificio {{ $apartamento->edificio->name }}
        </option>
      @else
        <option value="{{ $apartamento->building_id }}">
          Edificio {{ $apartamento->edificio->name }}
        </option>
      @endif
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
