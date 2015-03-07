@extends('master')

@section('title')
  - Crear - Eventos
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Crea un nuevo Evento en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::open(['action' => 'BuildingsController@store', 'class' => 'form-horizontal']) !!}
              @include('buildings._formCreate', ['textoBotonSubmit' => 'Añadir nuevo Edificio'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <!-- ajax de edo/mun/par -->
  <script src="{!! asset('js/ajax/getDirecciones.js') !!}"></script>
@stop
