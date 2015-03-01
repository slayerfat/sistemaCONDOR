@extends('master')

@section('title')
  - Actualizar - Mensaje - {{ $mensaje->title }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Editar {{ $mensaje->title }}</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($mensaje, [
                'method' => 'PATCH',
                'action' => ['MessagesController@update', $mensaje->id],
                'class'  => 'form-horizontal'
              ]) !!}
              @include('messages._form', ['textoBotonSubmit' => 'Editar Mensaje'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
