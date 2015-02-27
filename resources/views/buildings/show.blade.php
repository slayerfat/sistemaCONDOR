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
    {!! link_to_action('BuildingsController@gestions', 
            'Ver Miembros de Gestion Multifamiliar', 
            $edificio->id, 
            ['class' => 'btn btn-default']
          ) !!}
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action('BuildingsController@items', 
            'Ver Inventario', 
            $edificio->id, 
            ['class' => 'btn btn-default']
          ) !!}
      {!! link_to_action('BuildingsController@messages', 
            'Ver Mensajes', 
            $edificio->id, 
            ['class' => 'btn btn-default']
          ) !!}
    @endif
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
        <div class="row">
          <h2>
            Ultimos Movimientos
            {!! link_to_action('BuildingsController@movements', 
                  'Ver Todos', 
                  $edificio->id, 
                  ['class' => 'btn btn-default']
                ) !!}
          </h2>
          @foreach ($edificio->movimientos as $movimiento)
            <article>
              <h3>
                {!! $movimiento->concept !!}
              </h3>
              <body>
                <p>
                  @unless ($movimiento->cuenta()->get()->isEmpty())
                    Cuenta N°: {{ $movimiento->cuenta->bank_number }}
                  @endunless
                </p>
                <p>
                  @unless ($movimiento->tipo()->get()->isEmpty())
                    @if ($movimiento->tipo->description === 'Entrada')
                      <span class="verde">
                        {{ $movimiento->tipo->description }}
                      </span>
                    @elseif ($movimiento->tipo->description === 'Salida')
                      <span class="rojo">
                        {{ $movimiento->tipo->description }}
                      </span>
                    @else
                      <span class="amarillo">
                        {{ $movimiento->tipo->description }}
                      </span>
                    @endif
                  @endunless
                  <strong>
                    {{ $movimiento->operation }}
                  </strong>
                </p>
                <p>
                  <strong>
                    @if($movimiento->check_number)
                      Cheque N°: {{ $movimiento->check_number }}
                    @endif
                    {{ $movimiento->responsable->first_name }}
                    {{ $movimiento->responsable->first_surname }}
                  </strong>
                  {!! Html::mailto($movimiento->responsable->email) !!}
                </p>
                <p>
                  <i>
                    Ultima actualizacion
                    {!! Date::parse($movimiento->updated_at)->diffForHumans(); !!}.
                  </i>
                </p>
              </body>
            </article>
          @endforeach
        </div>
        <hr/>
        <div class="row">
          <h2>
            Ultimos Eventos del Edificio
            {!! link_to_action('BuildingsController@events', 
                  'Ver Todos', 
                  $edificio->id, 
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
              <p>
                <i>
                  Ultima actualizacion
                  {!! Date::parse($evento->updated_at)->diffForHumans(); !!}.
                </i>
              </p>
            </article>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@stop
