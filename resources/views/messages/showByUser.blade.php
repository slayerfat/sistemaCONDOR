@extends('master')

@section('title')
  - Mensajes - {{ $usuario->first_name }} {{ $usuario->first_surname }}
@stop

@section('contenido')
  @include('errors.lista')
  <div id="edificio">
    <h1>
      Mensajes de
      {!! link_to_action('UsersController@show',
        $usuario->first_name.', '.$usuario->first_surname,
        $usuario->id
      ) !!}
    </h1>
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
                <strong>
                  {!! $mensaje->tipo->description !!}.
                </strong>
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
@stop
