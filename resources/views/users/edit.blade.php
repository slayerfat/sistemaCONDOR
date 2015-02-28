@extends('master')

@section('title')
  - Actualizar - Usuario
@stop

@section('contenido')
  <div class="container">
    <h1>Actualizar Usuario en el Sistema</h1>
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
