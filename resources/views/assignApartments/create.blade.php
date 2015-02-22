@extends('master')

@section('contenido')
  <div class="container">
    {!! Form::model($edificio, [
          'method' => 'POST', 
          'action' => ['AssignApartmentsController@store', $edificio->id]
        ]) !!}
      @include('assignApartments._form', ['textoBotonSubmit' => 'Pedir Solicitud'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
