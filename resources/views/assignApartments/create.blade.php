@extends('master')

@section('title')
  - Crear - Asignacion
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crea un nuevo Usuario en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($edificio, [
                  'method' => 'POST',
                  'action' => ['AssignApartmentsController@store', $edificio->id],
                  'class'  => 'form-horizontal'
                ]) !!}
              @include('assignApartments._form', ['textoBotonSubmit' => 'Pedir Solicitud'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
