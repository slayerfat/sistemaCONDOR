@extends('master')

@section('title')
  - Crear - Usuario
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crea un nuevo Usuario en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::open(['action' => 'UsersController@store', 'class' => 'form-horizontal']) !!}
              @include('users._form', ['textoBotonSubmit' => 'Añadir nuevo Usario'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
