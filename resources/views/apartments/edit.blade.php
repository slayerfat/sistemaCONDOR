@extends('master')

@section('title')
  - Actualizar - Apartamentos - N° {{ $apartamento->number }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Editar Apartamento en el sistemaCONDOR</div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($apartamento, [
                'method' => 'PATCH',
                'action' => ['ApartmentsController@update', $apartamento->id],
                'class'  => 'form-horizontal'
              ]) !!}
              @include('apartments._form', ['textoBotonSubmit' => 'Editar Mensaje'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
