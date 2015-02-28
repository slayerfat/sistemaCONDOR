@extends('master')

@section('title')
  - Usuarios en el sistema
@stop

@section('css')
  <link rel="stylesheet" type="text/css" href="{!! asset('vendor/css/bootstrap-table/bootstrap-table.css') !!}">
@stop

@section('contenido')
  <div class="container">
    <h1>Usuarios en el sistema</h1>
    @include('errors.lista')
    <hr/>
    <div class="row">
      <div class="col-sm-12">
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
            @foreach ($usuarios as $usuario)
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
