@extends('master')

@section('title')
  - Actualizar - Miembro Gestion Multifamiliar - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <h1>
      Actualizar Miembro de la Gestion Multifamiliar del Edificio
      {!! link_to_action('BuildingsController@show',
        $edificio->name,
        $edificio->id
      ) !!}
    </h1>

    @include('errors.lista')
    
    <hr/>

    {!! Form::model($edificio, [
          'method' => 'PATCH', 
          'action' => ['GestionsController@update', $edificio->id]
        ]) !!}
      @include('gestions._form', ['textoBotonSubmit' => 'Actualizar nuevo Miembro'])
    {!! Form::close() !!}    
  </div>
@stop
