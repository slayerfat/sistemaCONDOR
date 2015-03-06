@extends('master')

@section('title')
  - Apartamentos - N° {{ $apartamento->number }}
@stop

@section('css')
  <link rel="stylesheet" type="text/css" href="{!! asset('vendor/css/bootstrap-table/bootstrap-table.css') !!}">
@stop

@section('contenido')
  <div class="container">
    <h1>
      Apartamento N°
      <span id="numero_apartamento">{{ $apartamento->number }}</span>
      <small>
        Piso {{ $apartamento->floor }}
      </small>
    </h1>

    <h3>
      Edificio
      {!! link_to_action('BuildingsController@show',
            $apartamento->edificio->name,
            $apartamento->edificio->id
          ) !!}
    </h3>

    <hr/>

    @unless ($apartamento->propietario()->get()->isEmpty())
      <h3>
        Propietario
        {!! link_to_action('UsersController@show',
              $apartamento->propietario->first_name.
              ', '.
              $apartamento->propietario->first_surname,
              $apartamento->propietario->id
            ) !!}
        <small>
          Email: {!! Html::mailto($apartamento->propietario->email) !!}
        </small>
      </h3>
    @endunless

    <div class="row">
      <div class="col-sm-12">
        @unless ($apartamento->habitantes()->get()->isEmpty())
          <h3>
            Habitantes
          </h3>
          @include('apartments._users-list', ['usuarios' => $apartamento->habitantes, 'habitantes' => true])
        @else
        <h3>
          Este Apartamento no posee habitantes, puede crear un habitante nuevo
          o puede buscar y seleccionar de la lista.
        </h3>
          @include('apartments._users-list', ['usuarios' => $usuarios, 'habitantes' => false])
        @endunless
      </div>
    </div>
  </div>
@stop

@section('js')
  <script src="{!! asset('vendor/js/bootstrap-table/bootstrap-table.js') !!}"></script>
  <script src="{!! asset('vendor/js/bootstrap-table/bootstrap-table-es-CR.js') !!}"></script>
  <script src="{!! asset('js/tables/asignar-habitante.js') !!}"></script>
@stop
