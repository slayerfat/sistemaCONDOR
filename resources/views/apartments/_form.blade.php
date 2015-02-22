<div class="form-group">
  {!! Form::label('user_id', 'Usuarios en el sistema:') !!}

  <select name="user_id" id="user_id" class="form-control">
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
