@extends('master')

@section('title')
  - Actualizar - Edificios - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Editar {{ $edificio->name }}</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($edificio, [
                'method' => 'PATCH',
                'action' => ['BuildingsController@update', $edificio->id],
                'class'  => 'form-horizontal'
                ]) !!}
              @include('buildings._form', ['textoBotonSubmit' => 'Actualizar Edificio'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <!-- ajax de edo/mun/par -->
  <script src="{!! asset('js/ajax/setDirecciones.js') !!}"></script>
@stop
