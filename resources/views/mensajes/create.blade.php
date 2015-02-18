@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Mensaje</h1>

    <hr/>

    {!! Form::open(['action' => 'MensajesController@store']) !!}
      @include('mensajes._form', ['textoBotonSubmit' => 'Añadir nuevo Mensaje'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
