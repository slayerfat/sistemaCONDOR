@extends('master')

@section('title')
  - Actualizar - Items - {{ $item->description }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Actualizar {{ $item->description }}</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($item, [
                'method' => 'PATCH',
                'action' => ['ItemsController@update', $item->id],
                'class'  => 'form-horizontal',
              ]) !!}
              @include('items._form', ['textoBotonSubmit' => 'Actualizar Item'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
