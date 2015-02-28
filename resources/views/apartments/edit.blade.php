@extends('master')

@section('title')
  - Actualizar - Apartamentos - N° {{ $apartamento->number }}
@stop

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Apartamento en el sistema</h1>

    @include('errors.lista')
    
    <hr/>

    {!! Form::model($apartamento, 
      ['method' => 'PATCH', 'action' => ['ApartmentsController@update', $apartamento->id]]) !!}
      @include('apartments._form', ['textoBotonSubmit' => 'Editar Mensaje'])
    {!! Form::close() !!}
  </div>
@stop
