<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Edificio;
use App\Apartamento;
use App\Persona;
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
		$apartamentos = $this->obtenerApartamento();
    $mensajes = Auth::user()->mensajes;
		return view('index', compact('apartamentos', 'mensajes'));
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
		$usuario      = Auth::user()->persona;
		$datos        = $usuario->toArray();
		$persona      = Persona::find($datos[0]['id']);
		$apartamentos = $persona->apartamentos;
		$datos        = $apartamentos->toArray();
		$apartamentos = Apartamento::find($datos[0]['id']);
		$apartamentos->edificio;
		$apartamentos->propietario;
		$apartamentos->piso;
		return $apartamentos;
	}

}
