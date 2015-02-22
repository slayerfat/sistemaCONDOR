@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Usuario en el sistema</h1>
    @include('errors.lista')
    <hr/>

    {!! Form::model($usuario, [
        'method' => 'PATCH', 
        'action' => ['UsersController@update', $usuario->id]
        ]) !!}
      @include('users._form', ['textoBotonSubmit' => 'Actualizar Usuario'])
    {!! Form::close() !!}

  </div>
@stop
