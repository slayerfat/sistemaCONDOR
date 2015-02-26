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
    <option selected="selected">Sin Cuenta Asociada</option>
    @foreach ($cuentas as $objeto)
      @foreach ($objeto as $cuenta)
        <option value="{{ $cuenta->id }}">
          {{ $cuenta->bank_number }} |
          {{ $cuenta->banco->description }}
        </option>
      @endforeach
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('movement_type_id', 'Tipo de Movimiento:') !!}
  <select name="movement_type_id" id="movement_type_id" class="form-control">
    @foreach ($tipos as $tipo)
      <option value="{{ $tipo->id }}">
        {{ $tipo->description }}
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('operation', 'Operacion:') !!}
  {!! Form::input('number', 'operation', null, [
        'class' => 'form-control', 
        'max' => '9999999999'
      ]) !!}
</div>

<div class="form-group">
  {!! Form::label('concept', 'Concepto:') !!}
  {!! Form::text('concept', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('item_id', 'Rubro relacionado:') !!}
  <select name="item_id" id="item_id" class="form-control">
    @foreach ($items as $item)
      <option value="{{ $item->id }}">
        {{ $item->description }} |
        {{ $item->total }} Unidades
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('total', 'Cantidad a añadir o retirar:') !!}
  {!! Form::text('total', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
