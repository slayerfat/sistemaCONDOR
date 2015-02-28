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
      Apartamento N° {{ $apartamento->number }}
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
        <h3>
          Habitantes
        </h3>
        <table 
          id="tabla"
          data-toggle="table"
          data-search="true"
          data-height="400"
          data-pagination="true"
          data-page-list="[10, 25, 50, 100]"
          data-show-toggle="true"
          data-show-columns="true"
          data-click-to-select="true"
          data-maintain-selected="true"
          data-sort-name="first_name"
          >
          <thead>
            <th data-field="first_name" data-sortable="true" data-switchable="false">
              Primer Nombre
            </th>
            <th data-field="first_surname" data-sortable="true" data-switchable="false">
              Primer Apellido
            </th>
            <th data-field="email" data-sortable="true" data-switchable="true">
              Correo Electronico
            </th>
            <th data-field="phone" data-sortable="true" data-switchable="true">
              Telefono
            </th>
          </thead>
          <tbody>
            @foreach ($apartamento->habitantes as $usuario)
              <tr>
                <td>
                  {{ $usuario->first_name }}
                </td>
                <td>
                  {{ $usuario->first_surname }}
                </td>
                <td>
                  {{ $usuario->email }}
                </td>
                <td>
                  {{ $usuario->phone }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@stop

@section('js')
  <script src="{!! asset('vendor/js/bootstrap-table/bootstrap-table.js') !!}"></script>
  <script src="{!! asset('vendor/js/bootstrap-table/bootstrap-table-es-CR.js') !!}"></script>
@stop
