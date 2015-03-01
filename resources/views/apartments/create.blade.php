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
              @include('apartments._form', ['textoBotonSubmit' => 'Añadir nuevo Apartamento'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
