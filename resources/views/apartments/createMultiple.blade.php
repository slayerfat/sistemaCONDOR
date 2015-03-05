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
            {!! Form::model($edificio, ['action' => ['ApartmentsController@storeMultiple', $edificio->id], 'class' => 'form-horizontal']) !!}
              <div class="form-group">
                {!! Form::label('aprt_by_floor', 'Apartamentos por piso:', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-9">
                  {!! Form::input('number', 'aprt_by_floor', null, ['class' => 'form-control', 'min' => '1', 'max' => '7']) !!}
                </div>
              </div>
              <div class="form-group">
                {!! Form::label('first_floor', '¿esto incluye el primer piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="radio col-md-9">
                  <label>{!! Form::input('radio', 'first_floor', null, ['checked']) !!}Si</label>
                  <label>{!! Form::input('radio', 'first_floor', null) !!}No</label>
                </div>
              </div>
              <div class="form-group" id="first">
                {!! Form::label('first_floor_quantity', '¿Cuantos Apartamentos hay en el primer piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-9">
                  {!! Form::input('number', 'first_floor_quantity', null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                {!! Form::label('last_floor', '¿esto incluye el ultimo piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="radio col-md-9">
                  <label>{!! Form::input('radio', 'last_floor', null, ['checked']) !!}Si</label>
                  <label>{!! Form::input('radio', 'last_floor', null) !!}No</label>
                </div>
              </div>
              <div class="form-group" id="second">
                {!! Form::label('last_floor_quantity', '¿Cuantos Apartamentos hay en el ultimo piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-9">
                  {!! Form::input('number', 'last_floor_quantity', null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  {!! Form::submit('Generar Apartamentos', ['class' => 'form-control btn btn-primary']) !!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <script charset="utf-8">
    $(function(){
      console.log('test');
    });
  </script>
@stop
