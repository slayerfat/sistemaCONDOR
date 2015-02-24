@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Item para los Edificios en sistema</h1>
    @include('errors.lista')
    
    <hr/>
    <a href="show.blade.php"></a>

    {!! Form::open(['action' => 'ItemsController@store']) !!}
      @include('items._form', ['textoBotonSubmit' => 'Añadir nuevo Item'])
    {!! Form::close() !!}
  </div>
@stop
