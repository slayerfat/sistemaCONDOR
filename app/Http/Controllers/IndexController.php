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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apartamentos = $this->obtenerApartamento();
		return view('index', compact('apartamentos'));
	}

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
