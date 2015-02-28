@extends('master')

@section('title')
  - Crear - Movimientos - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <h1>
      Añadir nuevo Movimiento al Edificio
      {!! link_to_action('BuildingsController@show',
        $edificio->name,
        $edificio->id
      ) !!}
    </h1>

    @include('errors.lista')

    <hr/>

    {!! Form::model($edificio, ['action' => 'MovementsController@store']) !!}
      @include('movements._form', ['textoBotonSubmit' => 'Añadir nuevo Movimiento'])
    {!! Form::close() !!}
  </div>
@stop
