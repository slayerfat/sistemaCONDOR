<div class="form-group">
  {!! Form::label('building_id', 'Edificio:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <select name="building_id" id="building_id" class="form-control">
      <option value="0">Seleccionar</option>
      @foreach ($edificios as $edificio)
        @if ($edificio->id === $apartamento->building_id)
          <option value="{!! $edificio->id !!}" selected="selected">
            {!! $edificio->name !!}
          </option>
        @else
          <option value="{!! $edificio->id !!}">
            {!! $edificio->name !!}
          </option>
        @endif
      @endforeach
    </select>
  </div>
  {!! Form::label('user_id', 'Propietario:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <select name="user_id" id="user_id" class="form-control">
      <option value="">Seleccionar</option>
      @foreach ($usuarios as $usuario)
        @if ($apartamento->user_id === $usuario->id)
          <option value="{!! $usuario->id !!}" selected="selected">
            {!! $usuario->first_name !!}
            {!! $usuario->first_surname !!}
          </option>
        @else
          <option value="{!! $usuario->id !!}">
            {!! $usuario->first_name !!}
            {!! $usuario->first_surname !!}
          </option>
        @endif
      @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  {!! Form::label('floor', 'Piso:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <select name="floor" id="floor" class="form-control">
      <option value="{{ $apartamento->floor }}" selected="selected"></option>
    </select>
  </div>
  {!! Form::label('number', 'Numero:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::input('number', 'number', $apartamento->number, ['class' => 'form-control', 'min' => '1', 'max' => '999']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>

@section('js')
  <script src="{!! asset('js/ajax/getFloors.js') !!}"></script>
@stop
