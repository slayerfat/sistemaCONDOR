@extends('master')

@section('title')
  - Crear - Asignacion
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Añadir usuario a Apartamento, como Habitante</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($usuario, [
                  'method' => 'POST',
                  'action' => ['AssignApartmentsController@store', $usuario->id],
                  'class'  => 'form-horizontal'
                ]) !!}
              <div class="form-group">
                {!! Form::label('building_id', 'Edificio: ', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-8">
                  {!! Form::select('building_id', $edificios, null, ['class' => 'form-control']) !!}
                </div>
              </div>

              <div class="form-group">
                {!! Form::label('apartment_id', 'Apartamentos: ', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-8">
                  {!! Form::select('apartment_id', $apartamentos, null, ['class' => 'form-control']) !!}
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  {!! Form::submit('Crear Habitante', ['class' => 'form-control btn btn-primary']) !!}
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
  <script src="{!! asset('js/ajax/getFloors.js') !!}"></script>
@stop
