@extends('master')

@section('title')
  @if (isset($apartamentos))
    - Index - {{ $apartamentos->edificio->name }}
  @else
    - Index - Bienvenido
  @endif
@stop

@section('contenido')
  @if (isset($apartamentos))
    <div id="edificio">
      <h1>
        Edificio
        {!! link_to_action('BuildingsController@show',
              $apartamentos->edificio->name, $apartamentos->edificio->id) !!}
        </a>
      </h1>
      <h3>
        <small>
          <a href="{!! action('ApartmentsController@show', $apartamentos->id) !!}">
            Apartamento N°: {{ $apartamentos->number }},
          </a>
          Piso {{ $apartamentos->floor }}
        </small>
      </h3>
      <p>
        @if ($apartamentos->propietario)
          Propietario:
          {!! link_to_action('UsersController@show',
                $apartamentos->propietario->first_name.
                ", ".
                $apartamentos->propietario->first_surname,
                $apartamentos->propietario->id
              ) !!}
        @endif
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          @if ($usuario->mensajes->count())
            <h3>
              Mensajes hechos por Ud.
              <a href="{{ action('MessagesController@index') }}"class="btn btn-default">
                Ver todos los Mensajes
              </a>
            </h3>
          @endif
          <a href="{{ action('MessagesController@create') }}" class="btn btn-primary">
            Crear Nuevo Mensaje
          </a>
        </div>
      </div>
    </div>
    <div id="lista-12">
      @foreach ($mensajes as $mensaje)
        <div class="modelo">
          <div class="detalles">
            <article>
              <h1>
                {!! link_to_action('MessagesController@show',
                      $mensaje->title, $mensaje->id) !!}
              </h1>
              <p class="body">
                {{ $mensaje->body }}
              </p>
              <p>
                <i>
                  Ultima actualizacion
                  {!! Date::parse($mensaje->updated_at)->diffForHumans(); !!}.
                </i>
              </p>
            </article>
          </div>
        </div>
      @endforeach
    </div>

    <hr/>

    <div id="lista-12">
      @if ($apartamentos->edificio)
        <div class="row">
          <div class="col-xs-12">
            <h3>Eventos en {{ $apartamentos->edificio->name }}
            <a href="{{ action('EventsController@index') }}"class="btn btn-default">
              Ver todos los Eventos
            </a>
            </h3>
            @if ($usuario->perfil->description === 'Administrador')
              <a href="{{ action('EventsController@create') }}" class="btn btn-primary">
                Crear Nuevo evento
              </a>
            @endif
          </div>
        </div>
        @foreach ($apartamentos->edificio->eventos as $evento)
          <div class="modelo">
            <div class="detalles">
              <article>
                <header>
                  <h1>
                    {!! link_to_action('EventsController@show',
                          $evento->title, $evento->id) !!}
                  </h1>
                </header>
                <p class="body">{{ $evento->body }}</p>
                <footer>
                  <p>
                    <i>
                      Ultima actualizacion
                      {!! Date::parse($evento->updated_at)->diffForHumans(); !!}.
                    </i>
                  </p>
                </footer>
              </article>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  @endif
  @unless (isset($apartamentos))
    <div class="container">
      <h1>Hola!! {{ $usuario->first_name }}, {{ $usuario->first_surname }}</h1>
      <p style="font-size:24px;">
        Parece que su perfil no esta relacionado a ningun apartamento,
        por favor <a href="{!! action('AssignApartmentsController@index') !!}">
        visite los Edificios disponibles en el sistema.</a>
        para empezar el proceso de registro.
      </p>
    </div>
  @endunless
@stop
