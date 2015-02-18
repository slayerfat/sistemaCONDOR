@extends('master')
@section('contenido')
  <div class="container">
    <h1>
      Edificio
      <a href="{{ url('#') }}">
        {{ $apartamentos->edificio->nombre }}
      </a>
    </h1>
    <h3>
      <small>
        Apartamento N°: {{ $apartamentos->numero }}, {{ $apartamentos->piso->descripcion }}
      </small>
    </h3>
    <p>
      Propietario:
      {{ $apartamentos->propietario->primer_nombre }},
      {{ $apartamentos->propietario->primer_apellido }}.
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <h3>Quejas y Sugerencias</h3>
        <a href="#" class="btn btn-primary">Crear Nuevo Mensaje</a>
        <section>
          <h5>Titulo</h5>
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </section>
      </div>
      <div class="col-xs-6">
        <h3>Eventos del edificio</h3>
        <a href="#" class="btn btn-primary">Crear nuevo Evento</a>
        <section>
          <h5>Titulo</h5>
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </section>
      </div>
    </div>
  </div>
@stop
