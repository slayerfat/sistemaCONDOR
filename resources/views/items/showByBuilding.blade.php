@extends('master')

@section('title')
  - Index - Items - {{ $edificio->name }}
@stop

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
  <div id="lista-8-4">
    @foreach ($edificio->items as $item)
      <div class="modelo">
        <div class="detalles">
          <h1>
            {{ $item->description }}
            <small>Total {{ $item->total }}</small>
          </h1>
          <p>
            <i>
              Ultima actualizacion
              {!! Date::parse($item->updated_at)->diffForHumans(); !!}.
            </i>
          </p>
        </div>
        @if (Auth::user()->perfil->description === 'Administrador')
          <div class="botones">
            {!! link_to_action(
                  'ItemsController@edit',
                  'Actualizar',
                  $item->id,
                  ['class' => 'btn btn-default']
                ) !!}
          </div>
          <div class="botones">
              {!! Form::open(['method' => 'DELETE', 'action' => ['ItemsController@destroy', $item->id]]) !!}
              {!! Form::submit('Eliminar Item', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
          </div>
        @endif
      </div>
    @endforeach
  </div>
@stop
