@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Añadir nuevo Movimiento al Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h1>

    <hr/>

    {!! Form::model($edificio, ['action' => 'MovementsController@store']) !!}
      @include('gestions._form', ['textoBotonSubmit' => 'Añadir nuevo Movimiento'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
