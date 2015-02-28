@extends('master')

@section('title')
  - Crear - Eventos
@stop

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Evento</h1>

    @include('errors.lista')
    
    <hr/>

    {!! Form::open(['action' => 'EventsController@store']) !!}
      @include('events._form', ['textoBotonSubmit' => 'Añadir nuevo Evento'])
    {!! Form::close() !!}
  </div>
@stop
