<?php namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;
use App\EventType;
use App\Event;
use App\Building;
use Auth;
use Mail;
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

    $data = [
      'evento'  => $evento,
      'usuario' => Auth::user(),
    ];

    $emails = [];

    $this->enviarEmailAdministradores($data);

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

  /**
   * Se chequean los administradores especificos relacionados
   * con el edificio del evento y se les envia
   * un correo de notificacion.
   *
   * @param  array    $data  el array con los datos relacionados
   * @return boolean
   */
  private function enviarEmailAdministradores($data)
  {
    // por si acaso...
    if (!isset($data)) return null;

    // se buscan los administradores
    $administradores = User::administradores()->get();
    // de los administradores se busca su edificio
    // para no mandar email a todos los admins del sistema.
    foreach ($administradores as $administrador) :
      foreach ($administrador->apartamentos as $apartamento) :
        if ($apartamento->building_id === $data['evento']->building_id) :
          Mail::send(['emails.eventCreated', 'emails.eventCreatedPlain'], $data, function($message) use ($administrador){
            $message->to($administrador->email)->subject('Nuevo Evento en sistemaCONDOR.');
          });
        endif;
      endforeach;
    endforeach;

    return true;
  }

  /**
   * Se chequean los usuarios especificos relacionados
   * con el edificio del evento y se les envia
   * un correo de notificacion.
   *
   * @param  array    $data  el array con los datos relacionados
   * @return boolean
   */
  private function enviarEmailUsuarios($data)
  {
    // por si acaso...
    if (!isset($data)) return null;

    // se buscan los usuarios
    $usuarios = User::all();
    // los emails
    $emails = [];
    // de los usuarios se busca su edificio
    // para no mandar email a todos los admins del sistema.
    foreach ($usuarios as $usuario) :
      $email = $usuario->email;
      foreach ($usuario->apartamentos as $apartamento) :
        if ($apartamento->building_id === $data['evento']->building_id) :
          if ($email){ $emails[] = $email; }
        endif;
      endforeach;
    endforeach;

    return $emails;
  }

}
