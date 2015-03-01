@extends('emails.structure')

@section('content')
  <section style="color: #333;font-family: sans-serif;">
    <h1>Nuevo Mensaje Creado!</h1>
    <h2>
      El Usuario
      {!! link_to_action('UsersController@show',
          $usuario->first_name.', '.$usuario->first_surname,
          $usuario->id,
          ['style' => 'font-family: sans-serif;color: #337ab7;text-decoration: none !important;']
      ) !!}
    </h2>
    <p>
      Ha creado un nuevo mensaje en el sistemaCONDOR:
    </p>
  </section>
  <section style="color: #333;font-family: sans-serif;">
    <h3>
      {!! link_to_action('MessagesController@show',
          $mensaje->title,
          $mensaje->id,
          ['style' => 'font-family: sans-serif;color: #337ab7;text-decoration: none !important;']
      ) !!}
    </h3>
    <p id="body" style="text-align: justify;">
      {{ $mensaje->body }}
    </p>
    <p>
      <strong>
        {{ $mensaje->tipo->description }}
      </strong>
    </p>
    <p>
      {{ $mensaje->created_at }}
    </p>
  </section>
@stop
