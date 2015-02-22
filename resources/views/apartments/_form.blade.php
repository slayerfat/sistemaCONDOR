<div class="form-group">
  {!! Form::label('building_id', 'Seleccionar Edificio:') !!}
  
  <select name="building_id" id="building_id" class="form-control">
    <option>Seleccionar</option>
    @foreach ($edificios as $edificio)
    <option value="{!! $edificio->id !!}">
      {!! $edificio->name !!}
    </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('user_id', 'Seleccionar Propietario:') !!}

  <select name="user_id" id="user_id" class="form-control">
    <option>Seleccionar</option>
    @foreach ($usuarios as $usuario)
      <option value="{!! $usuario->id !!}">
        {!! $usuario->first_name !!}
        {!! $usuario->first_surname !!}
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
