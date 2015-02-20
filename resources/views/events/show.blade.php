@extends('master')

@section('contenido')
  <div class="container">
    <article>
      <h1>
        {!! $evento->title !!}
      </h1>
      <body class="text-justify">{{ $evento->body }}</body>

      <hr/>

      <p>
        Creado el: {{ $evento->created_at }}
      </p>

      {{-- si usuario es valido --}}
      {!! link_to_action('EventsController@edit', 'Editar Evento', $evento->id) !!}
    </article>
  </div>
@stop
