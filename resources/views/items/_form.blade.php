<div class="form-group">
  {!! Form::label('building_id', 'Edificio:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
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
</div>

<div class="form-group">
  {!! Form::label('description', 'Descripcion:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('description', $item->description, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('total', 'Total Existente:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::input('number', 'total', $item->total, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>
