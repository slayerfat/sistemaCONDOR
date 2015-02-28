@extends('master')

@section('title')
  - Actualizar - Movimientos - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <h1>
      Editar Movimiento
    </h1>
    @include('errors.lista')
    <hr/>

    {!! Form::model($movimiento, ['method' => 'PATCH', 'action' => ['MovementsController@update', $movimiento->id]]) !!}
      @include('movements._form', ['textoBotonSubmit' => 'Actualizar Movimiento'])
    {!! Form::close() !!}
  </div>
@stop
