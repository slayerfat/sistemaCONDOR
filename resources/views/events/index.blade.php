@extends('master')

@section('contenido')
  @foreach ($edificios as $edificio)
    <div class="container">
      <h1>Eventos relacionados 
        <small>Con {{ $edificio->name }}</small>
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

      @include('errors.lista')
    </div>
  @endforeach
@stop
