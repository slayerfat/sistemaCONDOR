<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['auth', 'usuario.verificar']], function(){
  Route::get('/', 'IndexController@index');
  Route::resource('usuarios', 'UsersController');
  Route::resource('edificios', 'BuildingsController');
  // items en algun edificio
  Route::get('edificios/items/{edificios}', 'BuildingsController@items');
  // eventos en algun edificio
  Route::get('edificios/eventos/{edificios}', 'BuildingsController@events');
  // mensajes de algun edificio
  Route::get('edificios/mensajes/{edificios}', 'BuildingsController@messages');
  // crear un movimiento relacionado con un edificio
  Route::get('edificios/movimientos/{edificios}/create', 'BuildingsController@movementsCreate');
  // movimientos de algun edificio (caja chica)
  Route::get('edificios/movimientos/{edificios}', 'BuildingsController@movements');
  // gestiones multifamiliares de algun edificio
  Route::get('edificios/gestiones/{edificios}', 'BuildingsController@gestions');
  // crea un miembro de gestion multifamiliar de algun edificio
  Route::get('edificios/gestiones/{edificios}/create', 'BuildingsController@gestionsCreate');
  Route::resource('apartamentos', 'ApartmentsController');
  // para crear multiples apartamentos al mismo tiempo.
  Route::get('apartamentos/createMultiple/{edificios}', 'ApartmentsController@createMultiple');
  Route::post('apartamentos/storeMultiple/{edificios}', 'ApartmentsController@storeMultiple');
  Route::resource('mensajes', 'MessagesController');
  Route::resource('eventos', 'EventsController');
  Route::resource('items', 'ItemsController');
  Route::resource('movimientos', 'MovementsController');
  // GESTIONES
  // guardar nuevo
  Route::post('gestiones', 'GestionsController@store');
  // actualizar
  Route::get('gestiones/{usuarios}/{edificios}', 'GestionsController@edit');
  // guardar actualizaciones
  Route::patch('gestiones/{gestiones}', 'GestionsController@update');
  Route::delete('gestiones/{usuarios}/{edificios}', 'GestionsController@destroy');
});

// usuario por verificar
Route::get('/por-verificar', 'IndexController@porVerificar');

// para asignar un usuario a un apartamento de un edifico
Route::group(['middleware' => 'auth', 'prefix' => 'asignar-edificio', 'as' => 'asignarApartamento'], function(){
  Route::get('/', 'AssignApartmentsController@index');
  Route::get('/{id}/create', 'AssignApartmentsController@create');
  // esta es la version mamarracha
  Route::post('/{id}', 'AssignApartmentsController@store');
});

// pisos en algun edificio (para ajax de pisos)
Route::get('edificios/floors/{edificios}', 'BuildingsController@floors');
// para ajax de direcciones
Route::get('/estados', 'DirectionsController@states');
Route::get('/municipios/{id}', 'DirectionsController@towns');
Route::get('/municipio/{id}', 'DirectionsController@town');
Route::get('/parroquias/{id}', 'DirectionsController@parishes');
Route::get('/parroquia/{id}', 'DirectionsController@parish');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
