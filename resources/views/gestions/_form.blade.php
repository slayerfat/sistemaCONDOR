<div class="form-group">
  {!! Form::label('user_id', 'Habitante del edificio:') !!}
  <select name="user_id" id="user_id" class="form-control">
    @foreach ($edificio->apartamentos as $apartamento)
      @foreach ($apartamento->habitantes as $usuario)
        <option value="{{ $usuario->id }}">
          {{ $usuario->first_name }}
          {{ $usuario->first_surname }}
        </option>
      @endforeach
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('building_id', 'Habitante del edificio:') !!}
  <select name="building_id" id="building_id" class="form-control">
    <option value="{{ $edificio->id }}">
      {{ $edificio->name }}
    </option>
  </select>
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
