@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Editar Movimiento
    </h1>

    <hr/>

    {!! Form::model($movimiento, ['method' => 'PATCH', 'action' => ['MovementsController@update', $movimiento->id]]) !!}
      @include('movements._form', ['textoBotonSubmit' => 'Actualizar Movimiento'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
