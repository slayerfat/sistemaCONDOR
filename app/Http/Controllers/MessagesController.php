<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\MensajeRequest;
use App\Http\Controllers\Controller;
use App\Message;
use Auth;

use Illuminate\Http\Request;

class MessagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipos = \App\MessageType::lists('description', 'id');

		return view('messages.create', compact('types'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MensajeRequest $request)
	{
		/**
		 * se invoca el metodo insertarMensaje para 
		 * meter la informacion el la base de datos
		 * @var object
		 */
		$mensaje = Auth::user()->insertarMensaje($request);
		flash('Su Mensaje ha sido creado con exito.');
		return redirect()->action('IndexController@index');
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
