@extends('master')

@section('title')
  - Crear - Items - {{ $item->description }}
@stop

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Item para los Edificios en sistema</h1>
    @include('errors.lista')
    
    <hr/>

    {!! Form::open(['action' => 'ItemsController@store']) !!}
      @include('items._form', ['textoBotonSubmit' => 'Añadir nuevo Item'])
    {!! Form::close() !!}
  </div>
@stop
