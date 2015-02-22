@extends('master')

@section('contenido')
  <div class="container">
    <h1>Crea un nuevo Apartamento en el sistema</h1>
    @include('errors.lista')
    
    <hr/>
    <a href="show.blade.php"></a>

    {!! Form::model($apartamento, 
      ['method' => 'PATCH', 'action' => ['ApartmentsController@update', $apartamento->id]]) !!}
      @include('apartments._form', ['textoBotonSubmit' => 'Editar Mensaje'])
    {!! Form::close() !!}
  </div>
@stop
