@extends('master')

@section('title')
  - Index - Eventos - {{ $edificio->name }}
@stop

@section('contenido')
  @include('errors.lista')
  <div id="edificio">
    <h1>
      Eventos del Edificio
      {!! link_to_action('BuildingsController@show',
        $edificio->name,
        $edificio->id
      ) !!}
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
            <p class="body">{{ $evento->body }}</p>
            <footer>
              <p>
                <strong>
                  {!! $evento->tipo->description !!}.
                </strong>
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
@stop
