*******************************************************************
El Usuario
{{ $usuario->first_name }}
{{ $usuario->first_surname }}
*******************************************************************
Ha creado un nuevo mensaje en el sistemaCONDOR:

{{ $mensaje->title }}
*******************************************************************

{{ $mensaje->body }}

*******************************************************************
{{ $mensaje->tipo->description }}
*******************************************************************
{{ $mensaje->created_at }}
*******************************************************************
