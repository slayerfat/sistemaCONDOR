@extends('master')

@section('title')
  - Actualizar - Mensaje - {{ $mensaje->title }}
@stop

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $mensaje->title }}</small>
    </h1>
    @include('errors.lista')
    <hr/>

    {!! Form::model($mensaje, ['method' => 'PATCH', 'action' => ['MessagesController@update', $mensaje->id]]) !!}
      @include('messages._form', ['textoBotonSubmit' => 'Editar Mensaje'])
    {!! Form::close() !!}
  </div>
@stop
