@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $evento->title }}</small>
    </h1>

    <hr/>

    {!! Form::model($evento, [
          'method' => 'PATCH', 
          'action' => ['EventsController@update', $evento->id]
        ]) !!}
      @include('events._form', ['textoBotonSubmit' => 'Editar Evento'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
