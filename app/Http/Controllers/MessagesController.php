<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Controller;
use App\Message;
use App\MessageType;
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
		$types = MessageType::lists('description', 'id');
		$mensaje = new Message;

		return view('messages.create', compact('mensaje', 'types'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MessageRequest $request)
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
		$mensaje = Message::findOrFail($id);
		$types   = MessageType::lists('description', 'id');
		return view('messages.edit', compact('mensaje', 'types'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, MessageRequest $request)
	{
		$mensaje = Message::findOrFail($id);
		$mensaje->update($request->all());
		flash('Su Mensaje ha sido actualizado con exito.');
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
