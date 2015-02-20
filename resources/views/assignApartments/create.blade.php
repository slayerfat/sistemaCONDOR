@extends('master')

@section('contenido')
  <div class="container">
    {!! Form::model($edificio, [
          'method' => 'POST', 
          'action' => ['AssignAparmentsController@store', $edificio->id]
        ]) !!}
      @include('assignApartments._form', ['textoBotonSubmit' => 'Pedir Solicitud'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
