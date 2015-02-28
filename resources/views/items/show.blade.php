@extends('master')

@section('title')
  - Items - {{ $edificio->name }} - {{ $item->description }}
@stop

@section('contenido')
  <div id="edificio">
    <h1>
      Edificio
      {!! link_to_action(
          'BuildingsController@show',
          $item->edificio->name,
          $item->edificio->id
        ) !!}
      {!! link_to_action(
        'ItemsController@index',
        'Ver Todos los Items',
        null, 
        ['class' => 'btn btn-default']
      ) !!}
    </h1>
  </div>
  <div class="container">
    <article>
      <header>
        <h1>
          {{ $item->description }}
          <small>Total {{ $item->total }}</small>
        </h1>
      </header>
      <footer>
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
      </footer>
    </article>    
  </div>
@stop
