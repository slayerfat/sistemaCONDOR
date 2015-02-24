<div class="form-group">
  {!! Form::label('building_id', 'Seleccionar Edificio:') !!}
  
  <select name="building_id" id="building_id" class="form-control">
    <option>Seleccionar</option>
    @foreach ($edificios as $edificio)
      @if ($edificio->id === $item->building_id)
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

<div class="form-group">
  {!! Form::label('description', 'Descripcion del Item o Rubro:') !!}
  {!! Form::text('description', $item->description, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('total', 'Total Existente del Item o Rubro a registrar:') !!}
  {!! Form::input('number', 'total', $item->total, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
