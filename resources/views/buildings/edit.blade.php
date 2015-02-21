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
@stop
