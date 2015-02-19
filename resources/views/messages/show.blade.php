@extends('master')

@section('contenido')
  <div class="container">
    <article>
      <h1>{{ $mensaje->title }}</h1>
      <body class="text-justify">{{ $mensaje->description }}</body>

      <hr/>

      <p>
        Creado el: {{ $mensaje->created_at }}
      </p>
    </article>
  </div>
@stop
