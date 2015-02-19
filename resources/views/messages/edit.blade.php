@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Mensaje</h1>

    <hr/>

    {!! Form::model($mensaje, ['method' => 'PATCH', 'action' => ['MessagesController@update', $mensaje->id]]) !!}
      @include('mensajes._form', ['textoBotonSubmit' => 'Editar Mensaje'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
