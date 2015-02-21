@extends('master')

@section('contenido')
  <div class="container">
    <h1>Usuarios en el sistema</h1>
    @include('errors.lista')
    <hr/>

    <div class="row">
      <div class="container">
        @foreach ($usuarios as $usuario)
          <div class="col-sm-3">
            <h4>
              {{ $usuario->first_name }}
              {{ $usuario->first_surname }}
            </h4>
          </div>
          <div class="col-sm-3">
            <h4>
              {{ $usuario->email }}
              {{ $usuario->phone }}
            </h4>
          </div>
        @endforeach
      </div>
    </div>

  </div>
@stop
