@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Actualizar Miembro de la Gestion Multifamiliar del Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h1>

    <hr/>

    {!! Form::model($edificio, [
          'method' => 'PATCH', 
          'action' => ['GestionsController@update', $edificio->id]
        ]) !!}
      @include('gestions._form', ['textoBotonSubmit' => 'Actualizar nuevo Miembro'])
    {!! Form::close() !!}

    @include('errors.lista')
  </div>
@stop
