<?php namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Otros\EnviarEmail as Email;
use App\EventType;
use App\Event;
use App\Building;
use Auth;
use App\User;

class EventsController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('administrador.evento',
      ['except' => ['show']]
    );
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $edificios = Building::all();
    return view('events.index', compact('edificios'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $types = EventType::lists('description', 'id');
    $evento = new Event;
    $usuario = Auth::user();
    return view('events.create', compact('types', 'evento', 'usuario'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(EventRequest $request)
  {
    // se crea un nuevo objeto con los valores de request
    $evento = new Event($request->all());
    // se asignan el creado por y actualizado por
    $evento->user_id    = Auth::user()->id;
    $evento->created_by = Auth::user()->id;
    $evento->updated_by = Auth::user()->id;

    $edificio = Building::findOrFail($request->input('building_id'));
    $edificio->eventos()->save($evento);

    // datos usados para enviar el email
    $data = [
      'vista'   => ['emails.eventCreated', 'emails.eventCreatedPlain'],
      'subject' => 'Nuevo Evento en sistemaCONDOR.',
      'evento'  => $evento,
      'usuario' => Auth::user(),
    ];
    // array de destinatarios
    $emails = (array)$edificio->encargado->email +
              (array)Email::obtenerEmailUsuarios($evento) +
              (array)Email::obtenerEmailAdministradores($evento);

    Email::enviarEmail($data, $emails);

    // evento de exito
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
    $evento = Event::findOrFail($id);
    return view('events.show', compact('evento'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    // se busca el evento solicitado o falla
    $evento = Event::findOrFail($id);
    // los tipos de mensajes
    $types   = EventType::lists('description', 'id');
    $usuario = Auth::user();
    return view('events.edit', compact('evento', 'types', 'usuario'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, EventRequest $request)
  {
    // se busca el evento solicitado o falla
    $evento = Event::findOrFail($id);
    $evento->updated_by = Auth::user()->id;
    // actualiza el evento
    $evento->update($request->all());
    // mensaje de exito
    flash('El Evento ha sido actualizado con exito.');
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
