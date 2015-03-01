@extends('master')

@section('title')
  - Crear - Items
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crea un nuevo Item en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::open(['action' => 'ItemsController@store', 'class' => 'form-horizontal']) !!}
              @include('items._form', ['textoBotonSubmit' => 'Añadir nuevo Item'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
