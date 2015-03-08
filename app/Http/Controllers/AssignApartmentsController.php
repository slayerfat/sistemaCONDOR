<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Building;
use App\Apartment;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AssignApartmentsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // hacer resource o algo para validar como en eventscontroller
    $edificios = Building::all();
    return view('assignApartments.index', compact('edificios'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($id)
  {
    $edificio = Building::findOrFail($id);
    $apartamentos = $edificio->apartamentos;

    $apartamentos = Apartment::listaHumana($apartamentos);

    return view('assignApartments.create', compact('edificio', 'apartamentos'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store($id, Request $request)
  {
    // validacion de campos
    $this->validate($request, [
      'apartment_id' => 'required|integer'
    ]);
    $edificio = Building::findOrFail($id);

    Auth::user()->apartamentos()->attach($request->input('apartment_id'));

    return redirect()->action('IndexController@index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function createFromUserId($id)
  {
    $edificios = Building::lists('name', 'id');
    $usuario  = User::findOrFail($id);

    return view('assignApartments.createFromUserId', compact('edificios', 'usuario'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function storeFromUserId($id, Request $request)
  {
    // validacion de campos
    $this->validate($request, [
      'apartment_id' => 'required|integer'
    ]);
    $usuario = User::findOrFail($id);

    $usuario->apartamentos()->attach($request->input('apartment_id'));
    flash('Usuario asignado correctamente al apartamento.');
    return redirect()->action('UsersController@show', $usuario->id);
  }

  public function storeFromIdentity($cedula, $apartment_id)
  {
    $usuario = User::where('identity_card', $cedula)->first();
    $apartamento = Apartment::findOrFail($apartment_id);

    $apartamento->habitantes()->attach([$usuario->id]);

    return 'true';
  }

  public function removeFromIdentity($cedula, $apartment_id)
  {
    $usuario = User::where('identity_card', $cedula)->first();
    $apartamento = Apartment::findOrFail($apartment_id);

    $apartamento->habitantes()->detach([$usuario->id]);

    return 'true';
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
