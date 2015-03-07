<div class="form-group">
  {!! Form::label('name', 'Nombre:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('user_id', 'Encargado:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <select name="user_id" class="form-control">
    @foreach ($administradores as $administrador)
      <option value="{{ $administrador->id }}">
        {{$administrador->usuarios->first()->first_name}}
        {{$administrador->usuarios->first()->first_surname}}
        {{$administrador->usuarios->first()->email}}
      </option>
    @endforeach
  </select>
  </div>
</div>

<div class="form-group">
  {!! Form::label('total_floors', 'Pisos:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    {!! Form::input('number', 'total_floors', null, ['class' => 'form-control', 'min' => '0', 'max' => '200']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('exact_direction', 'Direccion:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    {!! Form::text('exact_direction', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('state_id', 'Estado:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    <select name="state_id" id="state_id" class="form-control">
    </select>
  </div>
</div>

<div class="form-group">
  {!! Form::label('town_id', 'Municipio:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    <select name="town_id" id="town_id" class="form-control">
    </select>
  </div>
</div>

<div class="form-group">
  {!! Form::label('parish_id', 'Parroquia:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-10">
    <select name="parish_id" id="parish_id" class="form-control">
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>
