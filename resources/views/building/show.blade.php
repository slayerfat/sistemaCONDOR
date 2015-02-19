@extends('master')

@section('contenido')
  <div class="container">
    <h1>Edificio <a href="{{ action('EdificioController@edit', $edificio->id) }}">{{ $edificio->nombre }}</a></h1>
  </div>
@stop
