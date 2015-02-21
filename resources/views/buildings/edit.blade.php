@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Editar
      <small>{{ $edificio->name }}</small>
    </h1>

    <hr/>

    {!! Form::model($edificio, [
        'method' => 'PATCH', 
        'action' => ['BuildingsController@update', $edificio->id]
        ]) !!}
      @include('buildings._form', ['textoBotonSubmit' => 'Editar Edificio'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>

  <!-- ajax de edo/mun/par -->
  {!! Html::script('js/ajax/direcciones.js') !!}
@stop
