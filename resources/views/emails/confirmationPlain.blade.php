*******************************************************************
Bienvenido al sistemaCONDOR!
*******************************************************************
Hola! {{ $usuario->username }}!
*******************************************************************

Para poder ingresar en el
{!! link_to_action('IndexController@index', 'sistemaCONDOR') !!}

Ud. debe confirmar su cuenta a travez del siguiente enlace:

*******************************************************************

{!! action('ConfirmationsController@confirm', $usuario->confirmacion->confirmation) !!}

*******************************************************************
