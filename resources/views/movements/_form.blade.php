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

<div class="form-group">
  {!! Form::label('check_number', 'Numero de cheque:') !!}
  {!! Form::text('check_number', null, ['class' => 'form-control']) !!}
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

<div class="form-group">
  {!! Form::label('total', 'Cantidad a añadir o retirar:') !!}
  {!! Form::text('total', null, [
        'class' => 'form-control',
        'placeholder' => 'Utilice valores negativos para retirar cantidades EJ: -5'
      ]) !!}
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
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
