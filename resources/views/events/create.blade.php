@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Evento</h1>

    <hr/>

    {!! Form::open(['action' => 'EventsController@store']) !!}
      @include('events._form', ['textoBotonSubmit' => 'Añadir nuevo Evento'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
