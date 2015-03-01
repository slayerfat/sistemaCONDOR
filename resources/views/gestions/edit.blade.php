@extends('master')

@section('title')
  - Actualizar - Miembro Gestion Multifamiliar - {{ $edificio->name }}
@stop

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Actualizar Miembro de la Gestion Multifamiliar del Edificio
            {!! link_to_action('BuildingsController@show',
              $edificio->name,
              $edificio->id
            ) !!}
          </div>
          <div class="panel-body">
            @include('errors.lista')
            {!! Form::model($edificio, [
                  'method' => 'PATCH',
                  'action' => ['GestionsController@update', $edificio->id],
                  'class'  => 'form-horizontal'
                ]) !!}
              @include('gestions._form', ['textoBotonSubmit' => 'Actualizar nuevo Miembro'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
