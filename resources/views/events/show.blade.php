@extends('master')

@section('contenido')
  <div class="container">
    <article>
      <h1>
        {!! $mensaje->title !!}
      </h1>
      <body class="text-justify">{{ $mensaje->description }}</body>

      <hr/>

      <p>
        Creado el: {{ $mensaje->created_at }}
      </p>

      {{-- si usuario es valido --}}
      {!! link_to_action('MessagesController@edit', 'Editar Mensaje', $mensaje->id) !!}
    </article>
  </div>
@stop
