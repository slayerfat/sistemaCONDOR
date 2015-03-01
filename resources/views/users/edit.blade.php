@extends('master')

@section('title')
  - Actualizar - Usuario
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Actualizar Usuario en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($usuario, [
                'method' => 'PATCH',
                'action' => ['UsersController@update', $usuario->id],
                'class'  => 'form-horizontal'
                ]) !!}
              @include('users._form', ['textoBotonSubmit' => 'Actualizar Usuario'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
