@extends('master')

@section('contenido')
  <div class="container">
    <article>
      <h1>
        {!! $evento->title !!}
        @if (Auth::user()->id === $evento->autor->id)
          {!! link_to_action('MessagesController@edit', 
                'Editar Mensaje', 
                $evento->id,
                ['class' => 'btn btn-primary']
              ) !!}
        @endif
      </h1>
      <body class="text-justify">{{ $evento->body }}</body>

      <hr/>
      
      <h4>
        Autor:
          {{ $evento->autor->first_name }}
          {{ $evento->autor->first_surname }}
      </h4>
      <p>
        <i>
          Ultima Actualizacion
          {!! Date::parse($evento->updated_at)->diffForHumans(); !!}.
        </i>
      </p>
    </article>
  </div>
@stop
