@extends('master')

@section('title')
  - Eventos - {!! $evento->title !!}
@stop

@section('contenido')
  <div class="container">
    <article>
      <header>
        <h1>
          {!! $evento->title !!}
          @if (Auth::user()->id === $evento->autor->id)
            {!! link_to_action('EventsController@edit',
              'Editar Evento',
              $evento->id,
              ['class' => 'btn btn-primary']
            ) !!}
          @endif
        </h1>
      </header>
      <p class="body">{{ $evento->body }}</p>

      <hr/>

      <footer>
        <address>
          <h3>
            {!! link_to_action('UsersController@show',
              $evento->autor->first_name.
              ', '.
              $evento->autor->first_surname,
              $evento->autor->id,
              null
            ) !!}
          </h3>
        </address>
        <p>
          <strong>
            {!! $evento->tipo->description !!}.
          </strong>
          <i>
            Ultima Actualizacion
            {!! Date::parse($evento->updated_at)->diffForHumans(); !!}.
          </i>
        </p>
      </footer>
    </article>
  </div>
@stop
