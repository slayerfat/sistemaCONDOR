<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Otros\Chequeo;
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
    $this->middleware('auth', ['only' => ['porVerificar']]);
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
    $apartamentos = Chequeo::obtenerPropiedades();
    // si no es propietario entonces se busca
    // como habitante
    if (!$apartamentos) $apartamentos = Chequeo::obtenerApartamentos();
    // esto puede ser limpiado
    $mensajes = Auth::user()->mensajes;
    $eventos  = Auth::user()->eventos;
    $usuario  = Auth::user();
    return view('index', compact('apartamentos', 'mensajes', 'eventos', 'usuario'));
  }

  public function porVerificar()
  {
    return view('auth.verification');
  }
}
