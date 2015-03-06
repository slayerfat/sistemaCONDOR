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
      @if (Auth::user()->perfil->description === 'Administrador')
        {!! link_to_action('ApartmentsController@edit',
              'Editar Apartamento',
              $apartamento->id,
              ['class' => 'btn btn-default']
            ) !!}
      @endif
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
          <div id="habitantes">
            <h3>
              Habitantes
              <button name="mas-usuarios" class="btn btn-primary">
                Añadir mas Habitantes
              </button>
            </h3>
            @include('apartments._users-list', ['usuarios' => $apartamento->habitantes, 'habitantes' => true])
          </div>
          <div id="usuarios" style="display:none;">
            <h3>
              Habitantes
              <button name="mas-usuarios" class="btn btn-primary">Volver</button>
            </h3>
            @include('apartments._users-list-full', ['usuarios' => $usuarios, 'habitantes' => false])
          </div>
        @else
          <div id="habitantes">
            <h3>
              Este Apartamento no posee habitantes.
              <button name="mas-usuarios" class="btn btn-primary">
                Añadir mas Habitantes
              </button>
            </h3>
          </div>
          <div id="usuarios" style="display:none;">
            @include('apartments._users-list', ['usuarios' => $usuarios, 'habitantes' => false])
          </div>
        @endunless
      </div>
    </div>
  </div>
@stop

@section('js')
  <script src="{!! asset('vendor/js/bootstrap-table/bootstrap-table.js') !!}"></script>
  <script src="{!! asset('vendor/js/bootstrap-table/bootstrap-table-es-CR.js') !!}"></script>
  <script src="{!! asset('js/tables/asignar-habitante.js') !!}"></script>
  <script charset="utf-8">
    $(function(){
      $('.eliminar').toggle();
    });
    $('button[name="mas-usuarios"]').click(function(){
      $('#habitantes').toggle(300, function(){
        $('.eliminar').toggle();
      });
      $('#usuarios').toggle(300, function(){
        $('#usuarios-full').bootstrapTable('resetView');
      });
    });
    function goTo(id){
      window.location.href = "{!! url('usuarios/') !!}/"+id
    }
  </script>
@stop
