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
