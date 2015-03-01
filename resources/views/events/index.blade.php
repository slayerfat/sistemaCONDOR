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
      <hr/>

      @foreach ($edificio->eventos as $evento)
        <article>
          <h2>
            {!! link_to_action('EventsController@show',
                  $evento->title, $evento->id) !!}
          </h2>
          <body>{{ $evento->body }}</body>
        </article>
      @endforeach
    </div>
  @endforeach
@stop
