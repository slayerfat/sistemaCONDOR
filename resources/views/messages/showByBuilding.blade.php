@extends('master')

@section('contenido')
  @include('errors.lista')
  <div id="edificio">
    <h1>
      Del Edificio 
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h1>
  </div>
  <div id="lista-12">
    @foreach ($edificio->eventos as $evento)
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
@stop
