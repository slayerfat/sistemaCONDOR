@extends('master')

@section('title')
  - Mensajes
@stop

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
    </div>
    <div id="lista-12">
      <?php $mensajes = $usuario->mensajes_paginados ?>
      @foreach ($mensajes as $mensaje)
        <div class="modelo">
          <div class="detalles">
            <article>
              <header>
                <h1>
                  {!! link_to_action('MessagesController@show',
                        $mensaje->title, $mensaje->id) !!}
                </h1>
              </header>
              <p class="body">
                {{ $mensaje->body }}
              </p>
              <footer>
                <p>
                  <i>
                    Ultima actualizacion
                    {!! Date::parse($mensaje->updated_at)->diffForHumans(); !!}.
                  </i>
                </p>
              </footer>
            </article>
          </div>
        </div>
      @endforeach
      {!! $mensajes->render(); !!}
    </div>
  @endforeach
@stop
