@extends('master')

@section('contenido')
  @include('errors.lista')
  <div class="container">
    <h3>
      Miembros de la Gestion Multifamiliar del Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h3>
  </div>
  @foreach ($edificio->miembrosDeGestion as $usuario)
    <div class="container">
      <article>
        <h2>
          Titulo
        </h2>
        <body>algo</body>
      </article>
    </div>
  @endforeach
@stop
