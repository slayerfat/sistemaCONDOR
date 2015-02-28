@extends('master')

@section('title')
  - Crear - Miembro Gestion Multifamiliar - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <h1>
      Crea un nuevo Miembro de la Gestion Multifamiliar del Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h1>

    @include('errors.lista')

    <hr/>

    {!! Form::model($edificio, ['action' => 'GestionsController@store']) !!}
      @include('gestions._form', ['textoBotonSubmit' => 'Añadir nuevo Miembro'])
    {!! Form::close() !!}
  </div>
@stop
