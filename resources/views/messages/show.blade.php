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
                $mensaje->autor->id,
                ['class' => 'btn btn-primary']
              ) !!}
        </small>
      </h3>

      <p>
        Creado el: {{ $mensaje->created_at }}
      </p>
    </article>
  </div>
@stop
