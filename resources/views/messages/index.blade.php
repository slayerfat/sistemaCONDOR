@extends('master')

@section('contenido')
  @foreach ($edificios as $edificio)
    <div class="container">
      <h1>Mensajes relacionados 
        <small>Con {{ $edificio->name }}</small>
      </h1>
      <h2>De {{ $usuario->first_name }}, {{ $usuario->first_surname }}</h2>
      <hr/>

      @foreach ($usuario->mensajes as $mensaje)
        <article>
          <h2>{{ $mensaje->title }}</h2>
          <body>{{ $mensaje->description }}</body>
        </article>
      @endforeach

      @include('errors.lista')
    </div>
  @endforeach
@stop
