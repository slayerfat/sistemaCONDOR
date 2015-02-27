@extends('master')

@section('contenido')
  @include('errors.lista')
  <div class="container">
    <h3>
      Eventos del Edificio 
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h3>
  </div>
  @foreach ($edificio->eventos as $evento)
    <div class="container">
      <article>
        <h2>
          {!! link_to_action('EventsController@show', 
                $evento->title, $evento->id) !!}
        </h2>
        <body>{{ $evento->body }}</body>
        <p>
          <i>
            Ultima actualizacion
            {!! Date::parse($evento->updated_at)->diffForHumans(); !!}.
          </i>
        </p>
      </article>
    </div>
  @endforeach
@stop
