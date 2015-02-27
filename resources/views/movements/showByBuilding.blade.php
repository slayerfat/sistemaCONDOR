@extends('master')

@section('contenido')
  @include('errors.lista')
  <div id="edificio">
    <h1>
      Movimientos relacionados al Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h1>
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action('BuildingsController@movementsCreate',
            'Añadir Movimiento',
            $edificio->id,
            ['class' => 'btn btn-primary']
          ) !!}
    @endif
  </div>
  <div id="lista-8-4">
    {{-- datos de usuarios relacionados con la gestion --}}
    @foreach ($edificio->miembrosDeGestion as $usuario)
      @foreach ($usuario->movimientos as $movimiento)
        <div class="modelo">
          <div class="detalles">
            <h2>
              {{ $movimiento->concept }}
            </h2>
            <h4>
              <small>
                Tipo: {{ $movimiento->tipo->description }}
              </small>
              @if ($movimiento->tipo->description === 'Entrada')
                <span class="verde">
                  {{ $movimiento->operation }}.
                </span>
              @else
                <span class="rojo">
                  {{ $movimiento->operation }}.
                </span>
              @endif
            </h4>
            <p>
              Responsable:
              {{ $movimiento->responsable->first_name }}
              {{ $movimiento->responsable->first_surname }} 
              @if ($movimiento->cuenta)
                | Numero de Cuenta:
                {{ $movimiento->cuenta->bank_number }}
              @endif
            </p>
          </div>
          @if (Auth::user()->perfil->description === 'Administrador')
            <div class="botones">
              <h2>
                {!! link_to_action('MovementsController@edit',
                      'Actualizar',
                      $movimiento->id,
                      ['class' => 'btn btn-default']
                    ) !!}
              </h2>
            </div>
            <div class="botones">
              <h2>
                {!! Form::open(['method' => 'DELETE', 'action' => ['MovementsController@destroy', $movimiento->id]]) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
              </h2>
            </div>
          @endif
        </div>
      @endforeach
    @endforeach
  </div>
@stop
