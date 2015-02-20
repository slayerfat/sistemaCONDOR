<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Building;
use App\Apartment;
use Illuminate\Http\Request;

class IndexController extends Controller {

	/**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    // se chequea que el usuario tenga un 
    // apartamento para saber el edificio
		$apartamentos = $this->obtenerApartamento();
    // si no es propietario entonces se busca 
    // como habitante
    if (!$apartamentos) $apartamentos = $this->obtenerApartamentos();
    // esto puede ser limpiado
    $mensajes = Auth::user()->mensajes;
    $eventos  = Auth::user()->eventos;
    $usuario  = Auth::user();
		return view('index', compact('apartamentos', 'mensajes', 'eventos', 'usuario'));
	}

  /**
   * @internal Esta mamarrachada necesita ser limpiada
   * 
   * se busca el apartamento y su informacion relacionada
   * desde la perspectiva del usuario logeado 
   * (autorizado en sistema)
   * y se regresa.
   * 
   * @return object
   */
	private function obtenerApartamento(){
    $usuario = Auth::user();
    foreach ($usuario->propiedades as $propiedad) {
      $apartamentos = Apartment::find($propiedad->id);
      $apartamentos->edificio;
      $apartamentos->propietario;
    }
    return isset($apartamentos) ? $apartamentos : null;
	}

  /**
   * @internal Esta mamarrachada necesita ser limpiada
   * 
   * se busca los apartamentos y su informacion relacionada
   * desde la perspectiva del usuario logeado
   * (autorizado en sistema)
   * y se regresa.
   * 
   * @return object
   */
  private function obtenerApartamentos(){
    $usuario = Auth::user();
    foreach ($usuario->apartamentos as $apartamento) {
      $apartamentos = Apartment::find($apartamento->id);
      $apartamentos->edificio;
      $apartamentos->propietario;
    }
    return isset($apartamentos) ? $apartamentos : null;
  }

}
