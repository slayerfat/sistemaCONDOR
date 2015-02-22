@extends('master')
@section('contenido')
  @if (isset($apartamentos))  
    <div class="container">
      <h1>
        Edificio
        {!! link_to_action('BuildingsController@show', 
              $apartamentos->edificio->name, $apartamentos->edificio->id) !!}
        </a>
      </h1>
      <h3>
        <small>
          Apartamento N°: {{ $apartamentos->number }}, Piso {{ $apartamentos->floor }}
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
            @foreach ($mensajes as $mensaje)
              <section>
                <h4>
                  {!! link_to_action('MessagesController@show', 
                        $mensaje->title, $mensaje->id) !!}
                </h4>
                <p class="text-justify">
                  {{ $mensaje->body }}
                </p>
              </section>
            @endforeach
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-xs-12">
          @if ($apartamentos->edificio)
            <h3>Eventos en {{ $apartamentos->edificio->name }} 
            <a href="{{ action('EventsController@index') }}"class="btn btn-default">
              Ver todos los Eventos
            </a>
            </h3>
            @if ($usuario->perfiles->count())
              @foreach ($usuario->perfiles as $perfil)
                @if ($perfil->description === 'Administrador')
                  <a href="{{ action('EventsController@create') }}" class="btn btn-primary">
                    Crear Nuevo evento
                  </a>
                @endif
              @endforeach
            @endif
            @foreach ($apartamentos->edificio->eventos as $evento)
              <section>
                @if ($usuario->perfiles->count())
                  @foreach ($usuario->perfiles as $perfil)
                    @if ($perfil)
                      @if ($perfil->description === 'Administrador')
                        <h4>
                          {!! link_to_action('EventsController@edit', 
                            $evento->title, $evento->id) !!}
                        </h4>
                      @else
                        <h4>
                          {!! link_to_action('EventsController@show', 
                                $evento->title, $evento->id) !!}
                        </h4>
                      @endif
                    @else
                      <h4>
                        {!! link_to_action('EventsController@show', 
                              $evento->title, $evento->id) !!}
                      </h4>
                    @endif
                  @endforeach
                @else
                  <h4>
                    {!! link_to_action('EventsController@show', 
                          $evento->title, $evento->id) !!}
                  </h4>
                @endif
                <p class="text-justify">
                  {{ $evento->body }}
                </p>
              </section>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  @endif
  @unless (isset($apartamentos))
    <div class="container">
      <h1>Hola!! {{ $usuario->first_name }}, {{ $usuario->first_surname }}</h1>
      <p>
        Parece que su perfil no esta relacionado a ningun apartamento, 
        por favor <a href="{!! action('AssignApartmentsController@index') !!}">
        visite los Edificios disponibles en el sistema.
        </a>
        para empezar el proceso de registro.
      </p>
    </div>
  @endunless
@stop
