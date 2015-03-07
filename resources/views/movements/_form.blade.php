<div class="form-group">
  <fieldset>
    {{-- BUSCAR UNA SOLUCION MENOS MAMARRACHA!!! --}}
    <label for="building_id" class="hidden col-md-2 control-label">Perteneciente al Edificio:</label>
    <div class="col-md-10">
      <select name="building_id" id="building_id" class="form-control hidden">
        <option value="{{ $edificio->id }}">
          {{ $edificio->name }}
        </option>
      </select>
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('user_id', 'Responsable:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
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
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('account_id', 'Numero de cuenta asociada:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
      <select name="account_id" id="account_id" class="form-control">
        <option selected="selected" value="0">Sin Cuenta Asociada</option>
        @foreach ($cuentas as $objeto)
          @foreach ($objeto as $cuenta)
            @if ($cuenta->id === $movimiento->account_id)
              <option value="{{ $cuenta->id }}" selected="selected">
            @else
              <option value="{{ $cuenta->id }}">
            @endif
              {{ $cuenta->bank_number }} |
              {{ $cuenta->banco->description }}
            </option>
          @endforeach
        @endforeach
      </select>
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('check_number', 'Numero de cheque:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
      {!! Form::text('check_number', null, ['class' => 'form-control']) !!}
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('movement_type_id', 'Tipo de Movimiento:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-4">
      <select name="movement_type_id" id="movement_type_id" class="form-control">
        @foreach ($tipos as $tipo)
          @if ($tipo->id === $movimiento->movement_type_id)
            <option value="{{ $tipo->id }}" selected="selected">
          @else
            <option value="{{ $tipo->id }}">
          @endif
            {{ $tipo->description }}
          </option>
        @endforeach
      </select>
    </div>
    {!! Form::label('operation', 'Operacion:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::input('number', 'operation', null, [
          'class' => 'form-control',
          'max' => '9999999999',
          'placeholder' => 'monto, o movimiento en Bolivares.'
        ]) !!}
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('concept', 'Concepto:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
      {!! Form::text('concept', null, ['class' => 'form-control','placeholder' => 'La descripcion del movimiento.']) !!}
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('item_id', 'Rubro relacionado:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
      <select name="item_id" id="item_id" class="form-control">
        <option value="0">Seleccionar</option>
        @foreach ($movimiento->items as $item)
          <option value="{{ $item->id }}" selected="selected">
            {{ $item->description }} |
            {{ $item->total }} Unidades
          </option>
        @endforeach
        @foreach ($items as $item)
          <option value="{{ $item->id }}">
            {{ $item->description }} |
            {{ $item->total }} Unidades
          </option>
        @endforeach
      </select>
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset>
    {!! Form::label('total', 'Cantidad a añadir o retirar:', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
      {!! Form::text('total', null, [
          'class' => 'form-control',
          'placeholder' => 'Utilice valores negativos para retirar cantidades EJ: -5'
        ]) !!}
    </div>
  </fieldset>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>

@section('js')
  <script type="text/javascript">
    $(function() {
      // si un item cambia, el total es eliminado
      $('#item_id').change(function(){
        $('#total').val('');
      });


      // para quitar elementos duplicados que vienen
      // del item y el objeto

      // la variable.
      var valores = new Array;
      $('#item_id > option[selected="selected"]').each(function(index){
        // por cada item selected se agrega al array.
        valores.push($(this).val());
      });
      // si no esta vacio.
      if (Object.keys(valores).length != 0) {
        // por cada elemento
        Object.keys(valores).forEach(function (key) {
          // se obtiene los datos (lo que esta en el option)
          var val = $('#item_id > option[value="'+valores[key]+'"]').html();
          // se quita del elemento #item_id (duplicados)
          $('#item_id > option[value="'+valores[key]+'"]').detach();
          // se reconstruye
          $('#item_id').append('<option value="'+valores[key]+'" selected="selected">'+val+'</option>');
        });
      }

    });
  </script>
@stop
