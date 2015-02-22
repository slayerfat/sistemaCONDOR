@extends('master')

@section('contenido')
  @include('errors.lista')
  @foreach ($edificios as $edificio)
    <div class="container">
      <h1>
        Mensajes relacionados 
        <small>
          Con 
          {!! link_to_action('BuildingsController@show',
                $edificio->name,
                $edificio->id
              ) !!}
        </small>
      </h1>
      <h3>
        De
        {!! link_to_action('UsersController@show',
              $usuario->first_name.
              ', '.
              $usuario->first_surname,
              $usuario->id
            ) !!}
      </h3>
      <hr/>

      @foreach ($usuario->mensajes as $mensaje)
        <article>
          <h2>
            {!! link_to_action('MessagesController@show', 
                  $mensaje->title, $mensaje->id) !!}
          </h2>
          <body>{{ $mensaje->body }}</body>
        </article>
      @endforeach
    </div>
  @endforeach
@stop
