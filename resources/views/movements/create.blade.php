@extends('master')

@section('title')
  - Crear - Movimientos - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Añadir nuevo Movimiento al Edificio
            {!! link_to_action('BuildingsController@show',
              $edificio->name,
              $edificio->id
            ) !!}
          </div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($edificio, ['action' => 'MovementsController@store']) !!}
              @include('movements._form', ['textoBotonSubmit' => 'Añadir nuevo Movimiento'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
