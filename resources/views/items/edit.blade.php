@extends('master')

@section('title')
  - Actualizar - Items - {{ $item->description }}
@stop

@section('contenido')
  <div class="container">
    <h1>Actualizar {{ $item->description }}</h1>
    @include('errors.lista')
    
    <hr/>

    {!! Form::model($item, [
          'method' => 'PATCH', 
          'action' => ['ItemsController@update', $item->id]
        ]) !!}   
      @include('items._form', ['textoBotonSubmit' => 'Actualizar Item'])
    {!! Form::close() !!}
  </div>
@stop
