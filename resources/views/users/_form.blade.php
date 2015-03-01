<div class="form-group">
  {!! Form::label('first_name', 'Primer Nombre:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('middle_name', 'Segundo Nombre:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('first_surname', 'Primer Apellido:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('first_surname', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('last_surname', 'Segundo Apellido:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('last_surname', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('email', 'E-mail:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('identity_card', 'Cedula:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('identity_card', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('birth_date', 'Fecha de Nacimiento:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::input('date', 'birth_date', $usuario->birth_date, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('sex_id', 'Genero:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::select('sex_id', $sexos, $usuario->sex_id, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('phone', 'Telefono:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::input('tel', 'phone', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::label('aditional_phone', 'Telefono Adicional:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::input('tel', 'aditional_phone', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
  </div>
</div>
