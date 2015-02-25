<div class="form-group">
  {!! Form::label('user_id', 'Habitante del Edificio:') !!}
  <select name="user_id" id="user_id" class="form-control">
    @foreach ($edificio->apartamentos as $apartamento)
      @foreach ($apartamento->habitantes as $habitante)
        @if ($habitante->id === $usuario->id)
          <option value="{{ $habitante->id }}" selected="selected">
        @else
          <option value="{{ $habitante->id }}">
        @endif
            {{ $habitante->first_name }}
            {{ $habitante->first_surname }}
          </option>
      @endforeach
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('building_id', 'Perteneciente al Edificio:') !!}
  <select name="building_id" id="building_id" class="form-control">
    <option value="{{ $edificio->id }}">
      {{ $edificio->name }}
    </option>
  </select>
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
