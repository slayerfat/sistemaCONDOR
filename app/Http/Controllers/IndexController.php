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

    $usuario  = Auth::user();
    $mensajes = $usuario->ultimos_mensajes;
    return view('index', compact('apartamentos', 'mensajes', 'usuario'));
  }

  public function porVerificar()
  {
    // hacer modelo para generar enlace confirmacion
    return view('auth.verification');
  }
}
