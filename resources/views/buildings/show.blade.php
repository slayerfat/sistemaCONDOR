@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      Edificio 
      @if (Auth::user()->id === $edificio->encargado->id)
        <a href="{{ action('BuildingsController@edit', $edificio->id) }}">
          {{ $edificio->name }}
        </a>
      @else
        <a href="{{ action('BuildingsController@show', $edificio->id) }}">
          {{ $edificio->name }}
        </a>
      @endif
    </h1>
    {{-- validar usuario para ver estos enlaces --}}
    <a href="#" class="btn btn-default">Ver Inventario</a>
    {!! link_to_action('MessagesController@index', 
          'Ver Mensajes', 
          null, 
          ['class' => 'btn btn-default']
        ) !!}
    <div class="row">
      <div class="col-sm-6">
        <h2>
          Apartamentos existentes
        </h2>
        @foreach ($edificio->apartamentos as $apartamento)
          <p>
            {!! link_to_action('ApartmentsController@show', 
                  'Numero '.$apartamento->number, 
                  $apartamento->id
                ) !!}
            <br>
            <small>
              Propietario:
              @unless ( $apartamento->propietario()->get()->isEmpty() )
                {!! link_to_action('UsersController@show',
                      $apartamento->propietario->first_name.
                      ', '.
                      $apartamento->propietario->first_surname,
                      $apartamento->propietario->id
                    ) !!}
                Telf: {{ $apartamento->propietario->phone }}
                Email: {!! Html::mailto($apartamento->propietario->email) !!}
              @else
                <i>Sin Propietario</i>
              @endunless
            </small>
          </p>
        @endforeach
      </div>
      <div class="col-sm-6">
        <h2>
          Ultimos Eventos del Edificio
          {!! link_to_action('EventsController@index', 
                'Ver Todos', 
                null, 
                ['class' => 'btn btn-default']
              ) !!}
        </h2>
        @foreach ($edificio->eventos as $evento)
          <article>
            <h3>
              {!! link_to_action('EventsController@show', $evento->title, $evento->id) !!}
            </h3>
            <body>
              {{ $evento->body }}
            </body>
          </article>
        @endforeach
      </div>
    </div>
  </div>
@stop
