@extends('master')

@section('contenido')
  @include('errors.lista')
  <div class="container">
    <h3>
      Miembros de la Gestion Multifamiliar del Edificio
      {!! link_to_action('BuildingsController@show',
            $edificio->name,
            $edificio->id
          ) !!}
    </h3>
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action('BuildingsController@gestionsCreate',
            'Añadir Miembro',
            $edificio->id,
            ['class' => 'btn btn-primary']
          ) !!}
    @endif
  </div>
  {{-- datos de usuarios relacionados con la gestion --}}
  @foreach ($edificio->miembrosDeGestion as $usuario)
    <div class="container">
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
  @endforeach
@stop
