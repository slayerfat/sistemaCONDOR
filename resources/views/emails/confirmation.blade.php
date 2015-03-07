@extends('emails.structure')

@section('content')
  <section style="color: #333;font-family: sans-serif;">
    <h1>Bienvenido al sistemaCONDOR!</h1>
    <h3>
      Hola! {{ $usuario->username }}!
    </h3>
  </section>
  <section style="color: #333;font-family: sans-serif;">
    <p id="body" style="text-align: justify;">
      Para poder ingresar en el
      {!! link_to_action('IndexController@index', 'sistemaCONDOR') !!}
      Ud. debe confirmar su cuenta a travez del siguiente enlace:
    </p>
    <p>
      algo
    </p>
  </section>
@stop
