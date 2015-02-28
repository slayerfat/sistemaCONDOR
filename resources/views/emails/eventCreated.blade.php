<!DOCTYPE html>
<html>
<body>
  <h1>Nuevo Evento Creado!</h1>
  <section>
    <h2>
      El Usuario
      {{ $usuario->first_name }}
      {{ $usuario->first_surname }}
    </h2>
    <p>
      Ha creado un nuevo evento en el sistemaCONDOR:
    </p>
  </section>
  <h3>{{ $evento->title }}</h3>
  <p>
    {{ $evento->body }}
  </p>
  <p>
    <strong>
      {{ $evento->tipo->description }}
    </strong>
  </p>
  <p>
    {{ $evento->created_at }}
  </p>
</body>
</html>
