@extends('master')

@section('title')
  - Index - Eventos
@stop

@section('contenido')
  @include('errors.lista')
  @foreach ($edificios as $edificio)
    <div class="container">
      <h1>
        Ultimos Eventos relacionados con
        {!! link_to_action('BuildingsController@show',
              $edificio->name,
              $edificio->id
            ) !!}
      </h1>
    </div>
    <div id="lista-12">
      @foreach ($edificio->ultimos_eventos as $evento)
        <div class="modelo">
          <div class="detalles">
            <article>
              <header>
                <h1>
                  {!! link_to_action('EventsController@show',
                        $evento->title, $evento->id) !!}
                </h1>
              </header>
              <p class="body">
                {{ $evento->body }}
              </p>
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
    </div>
    <hr>
  @endforeach
@stop
