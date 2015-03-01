@extends('master')

@section('title')
  - Actualizar - Eventos - {{ $evento->title }}
@stop

@section('contenido')
  <div class="container">
    <h1>

    </h1>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Editar {{ $evento->title }}</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($evento, [
                  'method' => 'PATCH',
                  'action' => ['EventsController@update', $evento->id],
                  'class'  => 'form-horizontal'
                ]) !!}
              @include('events._form', ['textoBotonSubmit' => 'Editar Evento'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
