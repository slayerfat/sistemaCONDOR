@extends('master')

@section('title')
  - Actualizar - Eventos - {{ $evento->title }}
@stop

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $evento->title }}</small>
    </h1>

    @include('errors.lista')

    <hr/>

    {!! Form::model($evento, [
          'method' => 'PATCH', 
          'action' => ['EventsController@update', $evento->id]
        ]) !!}
      @include('events._form', ['textoBotonSubmit' => 'Editar Evento'])
    {!! Form::close() !!}
  </div>
@stop
