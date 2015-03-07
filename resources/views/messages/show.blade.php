@extends('master')

@section('title')
  - Mensajes - {{ $mensaje->title }}
@stop

@section('contenido')
  <div class="container">
    <article>
      <header>
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
      </header>
      <p class="body">{{ $mensaje->body }}</p>
      <footer>
        <address>
          <h3>
            <span>
              {!! link_to_action(
                'UsersController@show',
                $mensaje->autor->first_name.
                ', '.
                $mensaje->autor->first_surname,
                $mensaje->autor->id
              ) !!},
            </span>
            <small>
              {!! link_to_action('BuildingsController@show',
                        $mensaje->edificio->name,
                        $mensaje->edificio->id) !!}.
            </small>
          </h3>
        </address>
        <p>
          <i>
            Ultima Actualizacion
            {!! Date::parse($mensaje->updated_at)->diffForHumans(); !!}.
          </i>
        </p>
      </footer>
    </article>
  </div>
@stop
