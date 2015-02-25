@extends('master')

@section('contenido')
  <div class="container">
    <article>
      <h1>
        {!! $mensaje->title !!}

        @if (Auth::user()->id === $mensaje->autor->id)
          {!! link_to_action('MessagesController@edit', 
                'Editar Mensaje', 
                $mensaje->id,
                ['class' => 'btn btn-primary']
              ) !!}
        @endif
      </h1>
      <body class="text-justify">{{ $mensaje->body }}</body>

      <hr/>

      <h3>
        Autor: 
        <small>
          {!! link_to_action(
                'UsersController@show', 
                $mensaje->autor->first_name.
                ', '.
                $mensaje->autor->first_surname, 
                $mensaje->autor->id
              ) !!}
        </small>
      </h3>

      <p>
        Ultima Actualizacion
        {!! Date::parse($mensaje->updated_at)->diffForHumans(); !!}.
      </p>
    </article>
  </div>
@stop
