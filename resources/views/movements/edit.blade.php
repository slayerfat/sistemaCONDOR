@extends('master')

@section('title')
  - Actualizar - Movimientos - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Editar Movimiento</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($movimiento, [
                'method' => 'PATCH',
                'action' => ['MovementsController@update', $movimiento->id],
                'class'  => 'form-horizontal'
              ]) !!}
              @include('movements._form', ['textoBotonSubmit' => 'Actualizar Movimiento'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
