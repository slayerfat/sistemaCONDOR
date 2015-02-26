<div class="form-group">
  {{-- BUSCAR UNA SOLUCION MENOS MAMARRACHA!!! --}}
  <label for="building_id" class="hidden">Perteneciente al Edificio:</label>
  <select name="building_id" id="building_id" class="form-control hidden">
    <option value="{{ $edificio->id }}">
      {{ $edificio->name }}
    </option>
  </select>
</div>

<div class="form-group">
  {!! Form::label('user_id', 'Responsable:') !!}
  <select name="user_id" id="user_id" class="form-control">
    @foreach ($edificio->miembrosDeGestion as $usuario)
      @if ($usuario->id === Auth::user()->id)
        <option value="{{ $usuario->id }}" selected="selected">
      @else
        <option value="{{ $usuario->id }}">
      @endif
        {{ $usuario->first_name }}
        {{ $usuario->first_surname }}
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('account_id', 'Numero de cuenta asociada:') !!}
  <select name="account_id" id="account_id" class="form-control">
    @foreach ($cuentas as $objeto)
      @foreach ($objeto as $cuenta)
        <option value="{{ $cuenta->id }}">
          {{ $cuenta->bank_number }}
        </option>
      @endforeach
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
