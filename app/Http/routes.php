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

Route::get('/', 'IndexController@index');

Route::get('welcome', 'WelcomeController@index');

Route::resource('edificio', 'BuildingsController');
Route::resource('mensajes', 'MessagesController');
Route::resource('eventos',  'EventsController');

Route::group(['prefix' => 'asignarEdificio', 'as' => 'asignarApartamento'], function(){
  Route::get('/{id}/create', 'AssignAparmentsController@create');
  // esta es la version mamarracha
  Route::post('/{id}', 'AssignAparmentsController@store');
});

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
