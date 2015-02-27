@extends('master')

@section('contenido')
  <div id="edificio">
    <h1>
      Rubros del Edificio
      {!! link_to_action(
          'BuildingsController@show',
          $edificio->name,
          $edificio->id
        ) !!}
    </h1>
    {!! link_to_action(
          'ItemsController@create', 
          'Crear Nuevo Item o Rubro',
          null,
          ['class' => 'btn btn-primary']
        ) !!}
  </div>
  <div id="lista-12">
    @foreach ($edificio->items as $item)
      <div class="modelo">
        <div class="detalles">
          <h1>
            {{ $item->description }}
            <small>Total {{ $item->total }}</small>
            @if (Auth::user()->perfil->description === 'Administrador')
              {!! link_to_action(
                    'ItemsController@edit',
                    'Editar',
                    $item->id,
                    ['class' => 'btn btn-primary']
                  ) !!}
            @endif
          </h1>
          <p>
            <i>
              Ultima actualizacion
              {!! Date::parse($item->updated_at)->diffForHumans(); !!}.
            </i>
          </p>
        </div>
      </div>
    @endforeach
  </div>
@stop
