@extends('master')

@section('title')
  - Crear - Apartamentos
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crear un nuevo Apartamento en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::open(['action' => 'ApartmentsController@store', 'class' => 'form-horizontal']) !!}
              {!! Form::label('aprt_by_floor', 'Apartamentos por piso:', ['class' => 'col-md-3 control-label']) !!}
              <div class="col-md-9">
                {!! Form::input('number', 'aprt_by_floor', null, ['class' => 'form-control', 'min' => '1', 'max' => '7']) !!}
              </div>
              {!! Form::label('last_floor', '¿esto incluye el ultimo piso?', ['class' => 'col-md-3 control-label']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
