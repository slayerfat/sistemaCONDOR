@extends('master')

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

      <hr/>

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
              ) !!}
            </span>
          </h3>
        </address>

        <p>
          Ultima Actualizacion
          {!! Date::parse($mensaje->updated_at)->diffForHumans(); !!}.
        </p>
      </footer>
    </article>
  </div>
@stop
