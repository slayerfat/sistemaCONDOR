@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Usuario en el sistema</h1>
    @include('errors.lista')
    <hr/>

    {!! Form::open(['action' => 'UsersController@store']) !!}
      @include('users._form', ['textoBotonSubmit' => 'Añadir nuevo Usario'])
    {!! Form::close() !!}

  </div>
@stop
