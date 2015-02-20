@extends('master')

@section('contenido')
  <div class="container">
    <h1>Edificio 
      <a href="{{ action('BuildingsController@edit', $edificio->id) }}">
        {{ $edificio->name }}
      </a>
    </h1>
    <h2>
      Apartamentos existentes:
    </h2>
    @foreach ($edificio->apartamentos as $apartamento)
      <p>
        {!! link_to_action('ApartmentsController@show', 'Numero '.$apartamento->number, $apartamento->id) !!}
        <br>
        <small>
          Propietario:
          @unless ( $apartamento->propietario()->get()->isEmpty() )
            {{ $apartamento->propietario->first_name }}
            {{ $apartamento->propietario->first_surname }} 
            Telf: {{ $apartamento->propietario->phone }}
            Email: {!! Html::mailto($apartamento->propietario->email) !!}
          @else
            <i>Sin Propietario</i>
          @endunless
        </small>
      </p>
    @endforeach
    

  </div>
@stop
