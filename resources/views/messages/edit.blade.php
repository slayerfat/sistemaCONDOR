@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $mensaje->title }}</small>
    </h1>

    <hr/>

    {!! Form::model($mensaje, ['method' => 'PATCH', 'action' => ['MessagesController@update', $mensaje->id]]) !!}
      @include('messages._form', ['textoBotonSubmit' => 'Editar Mensaje'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
