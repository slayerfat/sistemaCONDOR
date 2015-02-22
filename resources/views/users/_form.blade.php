<div class="form-group">
  {!! Form::label('first_name', 'Primer Nombre:') !!}
  {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
  {!! Form::label('middle_name', 'Segundo Nombre:') !!}
  {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('first_surname', 'Primer Apellido:') !!}
  {!! Form::text('first_surname', null, ['class' => 'form-control']) !!}
  {!! Form::label('last_surname', 'Segundo Apellido:') !!}
  {!! Form::text('last_surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Correo Electronico:') !!}
  {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('identity_card', 'Cedula de Identidad:') !!}
  {!! Form::text('identity_card', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('birth_date', 'Fecha de Nacimiento:') !!}
  {!! Form::input('date', 'birth_date', $usuario->birth_date, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('sex_id', 'Genero:') !!}
  {!! Form::select('sex_id', $sexos, $usuario->sex_id, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('phone', 'Telefono:') !!}
  {!! Form::input('tel', 'phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('aditional_phone', 'Telefono Adicional:') !!}
  {!! Form::input('tel', 'aditional_phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($textoBotonSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
