@extends('master')

@section('contenido')
  @include('errors.lista')
  <div id="edificio">
    <h1>
      Miembros de la Gestion Multifamiliar del Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h1>
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action('BuildingsController@gestionsCreate',
            'Añadir Miembro',
            $edificio->id,
            ['class' => 'btn btn-primary']
          ) !!}
    @endif
  </div>
  {{-- datos de usuarios relacionados con la gestion --}}
  <div class="lista-8-4">
    @foreach ($edificio->miembrosDeGestion as $usuario)
      <div class="modelo">
        <div class="detalles">
          <article>
            <h2>
              {{ $usuario->first_name }}
              {{ $usuario->middle_name }}
              {{ $usuario->first_surname }}
              {{ $usuario->last_surname }}
            </h2>
            <h4>
              <small>
                @if ($usuario->phone)
                  Telefono:
                  {{ $usuario->phone }}
                @endif
                @if ($usuario->email)
                  {!! Html::mailto($usuario->email) !!}
                @endif
              </small>
            </h4>
          </article>
        </div>
        @if (Auth::user()->perfil->description === 'Administrador')
          <div class="botones">
              {!! link_to_action('GestionsController@edit',
                    'Actualizar Miembro',
                    [$usuario->id, $edificio->id],
                    ['class' => 'btn btn-default']
                  ) !!}
          </div>
          <div class="botones">
              {!! Form::open(['method' => 'DELETE', 'action' => ['GestionsController@destroy', $usuario->id, $edificio->id]]) !!}
              {!! Form::submit('Quitar Miembro', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
          </div>
        @endif
      </div>
    @endforeach
  </div>
@stop
