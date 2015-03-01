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
  {!! Form::label('message_type_id', 'Tipo de Mensaje:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::select('message_type_id', $types, $mensaje->message_type_id, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('building_id', 'Edf. asociados a sus apartamentos:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <select name="building_id" id="building_id" class="form-control">
      @foreach (Auth::user()->apartamentos as $apartamento)
        @if ($mensaje->building_id === $apartamento->building_id)
          <option value="{{ $apartamento->building_id }}" selected="selected">
            {{ $apartamento->edificio->name }}
          </option>
        @else
          <option value="{{ $apartamento->building_id }}">
            {{ $apartamento->edificio->name }}
          </option>
        @endif
      @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
