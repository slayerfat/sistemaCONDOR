# sobre el formato

* Indentacion del texto de 2 espacios. __(tabulacion a 2 espacios)__

* las variables tendrán relación con lo que ellas pretendan hacer, ejemplo:
  ```php
  $usuario = new Usuario;
  // en vez de:
  $u = new Usuario;
  // otro ejemplo
  $nombres = ['juan', 'pepe', 'luis'];
  foreach ($nombres as $nombre) {
    echo $nombre;
  }
  // en vez de 
  $n = ['juan', 'pepe', 'luis'];
  foreach ($n as $a) {
    echo $a;
  }
  $operando_x = 0;
  // en vez de 
  $n = 0;
  // etc.
  ```
* se usara a la medida de lo posible declaracion de estructuras condicionales, repetitivas, etc, sin brakets "`{}`"

  ```php
  $nombres = ['juan', 'pepe', 'luis'];
  foreach ($nombres as $nombre) :
    echo $nombre;
  endforeach;
  // en vez de 
  foreach ($nombres as $nombre) {
    echo $nombre;
  }
  ```

* se adoptara a la medida de lo posible el uso de cammelCase en vez de en_barra.
* las clases se declararan como NombreDeLaClaseTal no en minusculas ni MAYUSCULAS.
* la declaracion de los metodos se haran en minusculaCamelCase.
* se usaran las clases y metodos existentes en laravel (no hay que reinventar la rueda).
* se respetara la estructura de directorios establecida por el framework.

# sobre la estructura de directorios

para el caso de los directorios del sistema, no es necesario alterar la estructura preestablecida por el framework. Sin embargo, dentro de las carpetas de MVC si se pueden hacer los directorios segun la conveniencia para la organizacion del codigo fuente.

directorios aplicables: (respetando las conveniciones de MVC)

app->http->directorios->(controllers, middlewares, requests) tu nuevo directorio

public->(js, css) tu nuevo directorio

resources->views->tu nuevo directorio 

tests->tu nuevo directorio
