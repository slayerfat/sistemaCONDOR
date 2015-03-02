@extends('master')

@section('title')
  - Index - Eventos
@stop

@section('contenido')
  @include('errors.lista')
  @foreach ($edificios as $edificio)
    <div class="container">
      <h1>
        Eventos relacionados
        <small>
          Con
          {!! link_to_action('BuildingsController@show',
                $edificio->name,
                $edificio->id
              ) !!}
        </small>
      </h1>
    </div>
    <div id="lista-12">
      <?php $eventos = $edificio->eventos_paginados ?>
      @foreach ($eventos as $evento)
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
      {!! $eventos->render(); !!}
    </div>
  @endforeach
@stop
