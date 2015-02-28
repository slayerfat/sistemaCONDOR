@extends('master')

@section('title')
  - Edificios - {{ $edificio->name }}
@stop

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
      'Miembros de Gestion Multifamiliar', 
      $edificio->id, 
      ['class' => 'btn btn-default']
    ) !!}
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action('BuildingsController@messages', 
        'Mensajes', 
        $edificio->id, 
        ['class' => 'btn btn-default']
      ) !!}
      {!! link_to_action('BuildingsController@events', 
        'Eventos', 
        $edificio->id, 
        ['class' => 'btn btn-default']
      ) !!}
      {!! link_to_action('BuildingsController@movements', 
        'Movimientos', 
        $edificio->id, 
        ['class' => 'btn btn-default']
      ) !!}
      {!! link_to_action('BuildingsController@items', 
        'Inventario', 
        $edificio->id, 
        ['class' => 'btn btn-default']
      ) !!}
    @endif
    <div id="apartamentos">
      <div id="apartamentos-lista">
        <h2>
          Apartamentos existentes
        </h2>
        @foreach ($edificio->apartamentos as $apartamento)
          <section>
            <p>
              {!! link_to_action('ApartmentsController@show', 
                'Numero '.$apartamento->number, 
                $apartamento->id
              ) !!}
              <small>
                @unless ( $apartamento->propietario()->get()->isEmpty() )
                  Propietario:
                  {!! link_to_action('UsersController@show',
                    $apartamento->propietario->first_name.
                    ', '.
                    $apartamento->propietario->first_surname,
                    $apartamento->propietario->id
                  ) !!}
                  <br>
                  <strong>
                    Telf: {{ $apartamento->propietario->phone }}
                  </strong> -
                  Email: {!! Html::mailto($apartamento->propietario->email) !!}
                @else
                  <i>Sin Propietario</i>
                @endunless
              </small>
            </p>
          </section>
        @endforeach
      </div>
      <div class="col-sm-6">
        <div class="row">
          <h2>
            Ultimos Movimientos
          </h2>
          @foreach ($edificio->movimientos as $movimiento)
            <article>
              <header>
                <h3>
                  {!! $movimiento->concept !!}
                </h3>
              </header>
              <section>
                <p class="body">
                  @unless ($movimiento->cuenta()->get()->isEmpty())
                    Cuenta N°: {{ $movimiento->cuenta->bank_number }}
                  @endunless
                </p>
              </section>
              <section>
                <p>
                  @unless ($movimiento->tipo()->get()->isEmpty())
                    @if ($movimiento->tipo->description === 'Entrada')
                      <span class="mediano verde">
                        <i>
                          {{ $movimiento->tipo->description }}
                        </i>
                        <strong>
                          {{ $movimiento->operation }}
                        </strong>
                      </span>
                    @elseif ($movimiento->tipo->description === 'Salida')
                      <span class="mediano rojo">
                        <i>
                          {{ $movimiento->tipo->description }}
                        </i>
                        <strong>
                          {{ $movimiento->operation }}
                        </strong>
                      </span>
                    @else
                      <span class="mediano amarillo">
                        <i>
                          {{ $movimiento->tipo->description }}
                        </i>
                        <strong>
                          {{ $movimiento->operation }}
                        </strong>
                      </span>
                    @endif
                  @endunless
                </p>
              </section>
              <section>
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
              </section>
              <footer>
                <p>
                  <i>
                    Ultima actualizacion
                    {!! Date::parse($movimiento->updated_at)->diffForHumans(); !!}.
                  </i>
                </p>
              </footer>
            </article>
          @endforeach
        </div>
        <hr/>
        <div class="row">
          <h2>
            Ultimos Eventos del Edificio
          </h2>
          @foreach ($edificio->eventos as $evento)
            <article>
              <header>
                <h3>
                  {!! link_to_action('EventsController@show', $evento->title, $evento->id) !!}
                </h3>
              </header>
              <p class="body">
                {{ $evento->body }}
              </p>
              <footer>
                <p>
                  <i>
                    Ultima actualizacion
                    {!! Date::parse($evento->updated_at)->diffForHumans(); !!}.
                  </i>
                </p>
              </footer>
            </article>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@stop
