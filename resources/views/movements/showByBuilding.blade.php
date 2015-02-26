@extends('master')

@section('contenido')
  @include('errors.lista')
  <div class="container">
    <h3>
      Movimientos relacionados al Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h3>
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action('BuildingsController@movementsCreate',
            'Añadir Movimiento',
            $edificio->id,
            ['class' => 'btn btn-primary']
          ) !!}
    @endif
  </div>
  <div class="container">
    {{-- datos de usuarios relacionados con la gestion --}}
    @foreach ($edificio->miembrosDeGestion as $usuario)
      @foreach ($usuario->movimientos as $movimiento)
        <div class="row">
          <div class="col-xs-8">
            <h2>
              {{ $movimiento->concept }}
            </h2>
            <h4>
              <small>
                Tipo: {{ $movimiento->tipo->description }}
              </small>
              @if ($movimiento->tipo->description === 'Entrada')
                <span class="entrada">
                  {{ $movimiento->operation }}.
                </span>
              @else
                <span class="salida">
                  {{ $movimiento->operation }}.
                </span>
              @endif
            </h4>
            <p>
              Responsable:
              {{ $movimiento->responsable->first_name }}
              {{ $movimiento->responsable->first_surname }} |
              Numero de Cuenta: {{ $movimiento->cuenta->bank_number }}
            </p>
          </div>
          @if (Auth::user()->perfil->description === 'Administrador')
            <div class="col-md-2">
              <h2>
                {!! link_to_action('MovementsController@edit',
                      'Actualizar',
                      $movimiento->id,
                      ['class' => 'btn btn-default']
                    ) !!}
              </h2>
            </div>
            <div class="col-md-2">
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
