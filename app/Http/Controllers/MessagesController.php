<?php namespace App\Http\Controllers;

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
		$usuario = Auth::user();
		$usuario->apartamentos;
		$usuario->mensajes;
		foreach ($usuario->apartamentos()->get() as $apartamento) :
			$edificios[] = $apartamento->edificio;
		endforeach;
		return view('messages.index', compact('usuario', 'edificios'));
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
		// se crea un nuevo objeto con los valores de request
		$mensaje = new Message($request->all());
		// se asignan el creado por y actualizado por
		$mensaje->created_by = Auth::user()->id;
		$mensaje->updated_by = Auth::user()->id;
		// se guarda el mensaje por medio del usuario
		// para tener el user_id
		Auth::user()->mensajes()->save($mensaje);
		// mensaje de exito
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
		$mensaje = Message::findOrFail($id);
		return view('messages.show', compact('mensaje'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// se busca el mensaje solicitado o falla
		$mensaje = Message::findOrFail($id);
		// los tipos de mensajes
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
		// se busca el mensaje solicitado o falla
		$mensaje = Message::findOrFail($id);
		$mensaje->updated_by = Auth::user()->id;
		// actualiza el mensaje
		$mensaje->update($request->all());
		// mensaje de exito
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
