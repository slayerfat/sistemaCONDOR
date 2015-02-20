@extends('master')

@section('contenido')
  <div class="container">
    @unless (!isset($edificios))
      @foreach ($edificios as $edificio)
        <h1>Edificio {{ $edificio->name }}</h1>
        <h1>Edificio {!! link_to_route('asignarApartamento', $edificio->name, $edificio->id) !!}</h1>

        <p>Encargado: 
          <i>
            {{ $edificio->encargado->first_name }},
            {{ $edificio->encargado->first_surname }}
            Correo Electronico: {{ $edificio->encargado->email }}
          </i>
        </p>
      @endforeach
    @endunless
  </div>
@stop
