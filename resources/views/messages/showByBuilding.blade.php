@extends('master')

@section('title')
  - Mensajes - {{ $edificio->name }}
@stop

@section('contenido')
  @include('errors.lista')
  <div id="edificio">
    <h1>
      Mensajes del Edificio
      {!! link_to_action('BuildingsController@show',
        $edificio->name,
        $edificio->id
      ) !!}
    </h1>
  </div>
  <div id="lista-12">
    <?php $mensajes = $edificio->mensajes_paginados ?>
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
                  {{-- hacer enlace a mensaje por autor --}}
                  {!! link_to_action('MessagesByUserController@show',
                      $mensaje->autor->first_name.', '.
                      $mensaje->autor->first_surname,
                      $mensaje->autor->id)
                    !!}.
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
