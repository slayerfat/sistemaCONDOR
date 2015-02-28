@extends('master')

@section('title')
  - Crear - Asignacion
@stop

@section('contenido')
  <div class="container">
    @include('errors.lista')
    {!! Form::model($edificio, [
          'method' => 'POST', 
          'action' => ['AssignApartmentsController@store', $edificio->id]
        ]) !!}
      @include('assignApartments._form', ['textoBotonSubmit' => 'Pedir Solicitud'])
    {!! Form::close() !!}
  </div>
@stop
