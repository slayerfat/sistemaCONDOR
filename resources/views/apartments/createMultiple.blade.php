@extends('master')

@section('title')
  - Crear Multiples - Apartamentos
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crear Apartamentos en el Edificio {!! link_to_action('BuildingsController@show', $edificio->name, $edificio->id) !!}</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($edificio, ['action' => ['ApartmentsController@storeMultiple', $edificio->id], 'class' => 'form-horizontal']) !!}
              <div class="form-group">
                <div class="col-md-12">
                  <center>
                    <label>
                      El Edificio
                      {{$edificio->name}}
                      posee {{$edificio->total_floors}} pisos.
                    </label>
                  </center>
                </div>
              </div>
              <div class="form-group">
                {!! Form::label('apartments', 'Apartamentos por piso:', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-9">
                  {!! Form::input('number', 'apartments', null, ['class' => 'form-control', 'min' => '1', 'max' => '7']) !!}
                </div>
              </div>
              <div class="form-group">
                {!! Form::label('first_floor', '¿esto incluye el primer piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="radio col-md-9">
                  <label>
                    <input checked="checked" name="first_floor" type="radio" id="first_floor" value="si">Si
                  </label>
                  <label>
                    <input name="first_floor" type="radio" id="first_floor" value="no">no
                  </label>
                </div>
              </div>
              <div class="form-group" id="first" style="display:none;">
                {!! Form::label('first_floor_quantity', '¿Cuantos Apartamentos hay en el primer piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-9">
                  {!! Form::input('number', 'first_floor_quantity', null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                {!! Form::label('last_floor', '¿esto incluye el ultimo piso?', ['class' => 'col-md-3 control-label']) !!}
                <div class="radio col-md-9">
                  <label>
                    <input checked="checked" name="last_floor" type="radio" id="last_floor" value="si">Si
                  </label>
                  <label>
                    <input name="last_floor" type="radio" id="last_floor" value="no">No
                  </label>
                </div>
              </div>
              <div class="form-group" id="last" style="display:none;">
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
      $('[name="first_floor"]').click(function(){
        $('[name="first_floor_quantity"]').val('');
        $('#first').toggle(300);
      });
      $('[name="last_floor"]').click(function(){
        $('[name="last_floor_quantity"]').val('');
        $('#last').toggle(300);
      });
    });
  </script>
@stop
