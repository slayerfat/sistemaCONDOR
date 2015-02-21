<div class="form-group">
  {!! Form::label('name', 'Nombre:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('user_id', 'Encargado:') !!}
  <select name="user_id" class="form-control">
    @foreach ($administradores as $administrador)
      @if ($edificio->user_id === $administrador->usuarios->first()->id)
        <option value="{{ $administrador->id }}" selected="selected">
      @else
        <option value="{{ $administrador->id }}">
      @endif
        {{$administrador->usuarios->first()->first_name}}
        {{$administrador->usuarios->first()->first_surname}}
        {{$administrador->usuarios->first()->email}}
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  {!! Form::label('exact_direction', 'Direccion:') !!}
  {!! Form::text('exact_direction', 
    $edificio->direccion->exact_direction, 
    ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('state_id', 'Estado:') !!}
  <select name="state_id" class="form-control">
    <option>tal</option>
  </select>
</div>

<div class="form-group">
  {!! Form::label('town_id', 'Municipio:') !!}
  <select name="town_id" class="form-control">
    <option>tal</option>
  </select>
</div>

<div class="form-group">
  {!! Form::label('parish_id', 'Parroquia:') !!}
  <select name="parish_id" class="form-control">
    <option value="1">tal</option>
  </select>
</div>


<div class="form-group">
  {!! Form::submit($textoBotonSubmit, 
    ['class' => 'form-control btn btn-primary']) !!}
</div>
