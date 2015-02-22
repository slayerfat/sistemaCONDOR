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
      
      <h3>
        Autor: 
        <small>
          {{ $evento->autor->first_name }}
          {{ $evento->autor->first_surname }}
        </small>
      </h3>
      <p>
        Creado el: {{ $evento->created_at }}
      </p>
    </article>
  </div>
@stop
