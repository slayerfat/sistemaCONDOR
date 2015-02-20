@extends('master')
@section('contenido')
  @if (isset($apartamentos))  
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
          <h3>
            Mensajes hechos por Ud.
            <a href="{{ action('MessagesController@index') }}"class="btn btn-default">
              Ver todos los Mensajes
            </a>
          </h3>
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
      <hr/>
      <div class="row">
        <div class="col-xs-12">
          <h3>Eventos en {{ $apartamentos->edificio->name }}</h3>
          <a href="{{ action('EventsController@create') }}" class="btn btn-primary">
            Crear Nuevo evento
          </a>
            @foreach ($eventos as $evento)
              <section>
                <h4>
                  {!! link_to_action('EventsController@edit', 
                        $evento->title, $evento->id) !!}
                </h4>
                <p class="text-justify">
                  {{ $evento->body }}
                </p>
              </section>
            @endforeach
        </div>
      </div>
    </div>
  @endif
  @unless (isset($apartamentos))
    <div class="container">
      <h1>Hola!! {{ $usuario->first_name }}, {{ $usuario->first_surname }}</h1>
      <p>
        Parece que su perfil no esta relacionado a ningun apartamento, 
        por favor <a href="{!! action('BuildingsController@index') !!}">
          visite los Edificios disponibles en el sistema.
        </a>
        para empezar el proceso de registro.
      </p>
    </div>
  @endunless
@stop
