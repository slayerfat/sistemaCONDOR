<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Building;
use App\Apartment;
use App\User;
use App\Profile;

use Illuminate\Http\Request;

class BuildingsController extends Controller {

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
		// hacer resource o algo para validar como en eventscontroller
		$edificios = Building::all();
		$usuario = Auth::user()->apartamentos;
		return view('buildings.index', compact('edificios', 'usuario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$edificio = Building::findOrFail($id);

		return view('buildings.show', compact('edificio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edificio = Building::findOrFail($id);

		$administradores = Profile::where('description', 'Administrador')->get();

		return view('buildings.edit', compact('edificio', 'administradores'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		// se busca el edificio solicitado o falla
		$edificio = Building::findOrFail($id);
		$edificio->updated_by = Auth::user()->id;
		// dd($request->all());
		// se guarda la informacion del edificio
		$edificio->update($request->all());
		// se guarda la direccion por el edifico
		// para tener el id de direccion
		// (edificio->direction_id)
		$edificio->direccion()->update($request->all());
		// mensaje de exito
		flash('El Edificio ha sido actualizado con exito.');
		return redirect()->action('IndexController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
