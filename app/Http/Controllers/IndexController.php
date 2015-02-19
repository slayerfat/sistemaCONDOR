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
		$apartamentos = $this->obtenerApartamento();
		return view('index', compact('apartamentos'));
	}

	private function obtenerApartamento(){
    $usuario = Auth::user();
    foreach ($usuario->propiedades as $propiedad) {
      $apartamentos = Apartment::find($propiedad->id);
      $apartamentos->edificio;
      $apartamentos->propietario;
    }
		return $apartamentos;
	}

}
