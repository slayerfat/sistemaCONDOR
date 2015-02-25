@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      {{ $item->description }}
      <small>Total {{ $item->total }}</small>
    </h1>
    <p>
      <i>
        Ultima Actualizacion
        {!! Date::parse($item->updated_at)->diffForHumans(); !!}.
      </i>
    </p>
    @if (Auth::user()->perfil->description === 'Administrador')
      {!! link_to_action(
            'ItemsController@edit',
            'Editar',
            $item->id,
            ['class' => 'btn btn-primary']
          ) !!}
    @endif
    <h3>
      Edificio
      {!! link_to_action(
          'BuildingsController@show',
          $item->edificio->name,
          $item->edificio->id
        ) !!}
    </h3>
    {!! link_to_action(
          'ItemsController@index',
          'Ver Todos los Items',
          null, 
          ['class' => 'btn btn-default']
        ) !!}
  </div>
@stop
