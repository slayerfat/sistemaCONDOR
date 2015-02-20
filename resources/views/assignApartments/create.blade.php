@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $edificio->name }}</small>
    </h1>

    <hr/>

    {!! Form::model($edificio, [
          'method' => 'PATCH', 
          'action' => ['EventsController@update', $edificio->id]
        ]) !!}
      @include('assignApartments._form', ['textoBotonSubmit' => 'Editar edificio'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
