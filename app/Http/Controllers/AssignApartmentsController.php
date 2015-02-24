<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Building;
use App\Apartment;
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
    $usuario = Auth::user()->apartamentos;
    return view('assignApartments.index', compact('edificios', 'usuario'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($id)
  {
    $edificio = Building::findOrFail($id);
    $apartamentos = Apartment::lists('number', 'id');

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
