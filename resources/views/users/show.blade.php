@extends('master')

@section('contenido')
  <div class="container">
    <h1>
      {{ $usuario->first_name }}
      {{ $usuario->middle_name }},
      {{ $usuario->first_surname }}
      {{ $usuario->last_surname }}
      <small>
        {{$usuario->username}}
      </small>
      @if (Auth::user()->id === $usuario->id)
        {!!link_to_action(
            'UsersController@edit', 
            'Editar', 
            $usuario->id,
            ['class' => 'btn btn-primary']) !!}
      @endif
    </h1>
    <p>
      Cedula de indentidad: {{ $usuario->identity_card }}
    </p>

    <h3>Informacion de contacto</h3>
    <p>
      {{ $usuario->email }}
      {{ $usuario->phone }}
      {{ $usuario->aditional_phone }}
    </p>
    <hr/>
    <section>
      Perteneciente a
      @foreach ($usuario->apartamentos as $apartamento)
        <h4>
          {!!link_to_action(
              'BuildingsController@show', 
              $apartamento->edificio->name, 
              $apartamento->edificio->id) !!}
          <small>
            Piso
            {{ $apartamento->floor }}
            Apartamento
            {{ $apartamento->number }}
          </small>
        </h4>
      @endforeach
    </section>
    <hr/>
    <section>
      Perfiles
      @foreach ($usuario->perfiles as $perfil)
        <h4>
          {{ $perfil->description }}
        </h4>
      @endforeach
    </section>

    <hr/>
    <section>
      <h3>
        Ultimos mensajes
        {!!link_to_action(
          'MessagesController@create', 
          'Crear Nuevo', null,
          ['class' => 'btn btn-primary']) !!}
      </h3>
      
      @foreach ($usuario->mensajes as $mensaje)
        <h4>
          @if (Auth::user()->id === $usuario->id)
            {!!link_to_action(
              'MessagesController@edit',
              $mensaje->title,
              $mensaje->id) !!}
          @else
            {!!link_to_action(
              'MessagesController@show', 
              $mensaje->title,
              $mensaje->id) !!}
          @endif
        </h4>
        <p>
          {{ $mensaje->body }}
        </p>
      @endforeach
    </section>
  </div>
@stop
