@extends('master')

@section('contenido')
  <div class="container">
    <h3>
      Edificio
      {!! link_to_action(
          'BuildingsController@show',
          $edificio->name,
          $edificio->id
        ) !!}
    </h3>
  </div>
  @foreach ($items as $item)
    <div class="container">
        <h1>
          {{ $item->description }}
          <small>Total {{ $item->total }}</small>
        </h1>
        @if (Auth::user()->perfil->description === 'Administrador')
          {!! link_to_action(
                'ItemsController@edit',
                'Editar',
                $item->id,
                ['class' => 'btn btn-primary']
              ) !!}
        @endif
      </div>
  @endforeach
@stop
