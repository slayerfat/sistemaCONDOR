@extends('master')

@section('title')
  - Crear - Mensaje
@stop

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Mensaje</h1>
    @include('errors.lista')
    <hr/>

    {!! Form::open(['action' => 'MessagesController@store']) !!}
      @include('messages._form', ['textoBotonSubmit' => 'Añadir nuevo Mensaje'])
    {!! Form::close() !!}
  </div>
@stop
