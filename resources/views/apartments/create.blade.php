@extends('master')

@section('title')
  - Crear - Apartamentos
@stop

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Apartamento en el sistema</h1>
    @include('errors.lista')
    
    <hr/>

    {!! Form::open(['action' => 'ApartmentsController@store']) !!}
      @include('apartments._form', ['textoBotonSubmit' => 'Añadir nuevo Apartamento'])
    {!! Form::close() !!}
  </div>
@stop
