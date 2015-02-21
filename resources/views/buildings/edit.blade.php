@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $edificio->name }}</small>
    </h1>

    @include('errors.lista')

    <hr/>

    {!! Form::model($edificio, [
        'method' => 'PATCH', 
        'action' => ['BuildingsController@update', $edificio->id]
        ]) !!}
      @include('buildings._form', ['textoBotonSubmit' => 'Actualizar Edificio'])
    {!! Form::close() !!}
    
  </div>
@stop

@section('js')
  <!-- ajax de edo/mun/par -->
  <script src="{!! asset('js/ajax/setDirecciones.js') !!}"></script>
@stop
