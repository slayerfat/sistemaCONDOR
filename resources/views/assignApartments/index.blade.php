@extends('master')

@section('contenido')
  <div class="container">
    @unless (!isset($edificios))
      @foreach ($edificios as $edificio)
        <h1>Edificio 
          {!! link_to_action('AssignApartmentsController@create', 
            $edificio->name, $edificio->id) !!}
        </h1>
        <p>
          {{ $edificio->direccion->exact_direction }}.
        </p>
        <p>
          Encargado: 
          <i>
            {!! link_to_action(
                  'UsersController@show',
                  $edificio->encargado->first_name.
                  ', '.
                  $edificio->encargado->first_surname,
                  $edificio->encargado->id
                ) !!}
            Email: {!! Html::mailto($edificio->encargado->email) !!}
          </i>
        </p>
      @endforeach
    @endunless
  </div>
@stop
