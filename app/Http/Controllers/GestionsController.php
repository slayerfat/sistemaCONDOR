<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Building;
use App\User;
use Illuminate\Http\Request;

class GestionsController extends Controller {

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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($usuario_id, $edificio_id)
	{
		$edificio = Building::findOrFail($edificio_id);
    $usuario  = User::findOrFail($usuario_id);
		return view('gestions.edit', compact('edificio', 'usuario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$this->validate($request, [
      'building_id' => 'required',
      'user_id'     => 'required',
    ]);
    $edificio = Building::findOrFail($id);
    $usuario  = User::findOrFail($request->input('user_id'));
    $edificio->miembrosDeGestion()->sync([$usuario->id]);

    flash('Miembro de Gestion Multifamiliar actualizado con exito.');
    return redirect()->action('BuildingsController@gestions', $edificio->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($usuario_id, $edificio_id)
	{
		$edificio = Building::findOrFail($edificio_id);
	  $usuario  = User::findOrFail($usuario_id);
	  $edificio->miembrosDeGestion()->detach([$usuario->id]);

	  flash()->warning('Miembro de Gestion Multifamiliar eliminado con exito.');
	  return redirect()->action('BuildingsController@gestions', $edificio->id);
	}

}
