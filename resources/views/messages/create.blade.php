@extends('master')

@section('title')
  - Crear - Mensaje
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crea un nuevo Mensaje</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::open(['action' => 'MessagesController@store', 'class' => 'form-horizontal']) !!}
              @include('messages._form', ['textoBotonSubmit' => 'Añadir nuevo Mensaje'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
