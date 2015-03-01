@extends('master')

@section('title')
  - Registrarse
@stop

@section('contenido')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Registrarse en el sistemaCONDOR</div>
        <div class="panel-body">
          @include('errors.lista')
          @include('auth._form')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
