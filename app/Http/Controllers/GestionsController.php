<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Building;
use App\User;
use Illuminate\Http\Request;

class GestionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return redirect()->action('BuildingsController@gestions');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return redirect()->action('BuildingsController@gestionsCreate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
    $this->validate($request, [
      'building_id' => 'required',
      'user_id'     => 'required',
    ]);
    $edificio = Building::findOrFail($request->input('building_id'));
    $usuario  = User::findOrFail($request->input('user_id'));
    $edificio->miembrosDeGestion()->save($usuario);

    flash('Miembro de Gestion Multifamiliar creado con exito.');
    return redirect()->action('BuildingsController@gestions', $edificio->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
