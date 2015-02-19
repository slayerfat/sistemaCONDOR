@extends('master')
@section('contenido')
  <div class="container">
    <h1>
      Edificio
      <a href="{{ url('#') }}">
        {{ $apartamentos->edificio->name }}
      </a>
    </h1>
    <h3>
      <small>
        Apartamento N°: {{ $apartamentos->number }}, Piso {{ $apartamentos->floor }}
      </small>
    </h3>
    <p>
      Propietario:
      {{ $apartamentos->propietario->first_name }},
      {{ $apartamentos->propietario->first_surname }}.
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3>Mensajes hechos por Ud.</h3>
        <a href="{{ action('MessagesController@create') }}" class="btn btn-primary">
          Crear Nuevo Mensaje
        </a>
          @foreach ($mensajes as $mensaje)
            <section>
              <h4>
                {!! link_to_action('MessagesController@edit', 
                      $mensaje->title, $mensaje->id) !!}
              </h4>
              <p class="text-justify">
                {{ $mensaje->description }}
              </p>
            </section>
          @endforeach
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h3>Eventos del Edificio</h3>
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
