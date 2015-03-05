<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ApartmentsRequest;
use App\Http\Requests\MultipleApartmentsRequest;
use App\Http\Controllers\Controller;
use App\Apartment;
use App\Building;
use App\User;
use Auth;

class ApartmentsController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('administrador.evento',
      ['except' => ['index', 'show']
    ]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return redirect()->action('BuildingsController@index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $apartamento = new Apartment;
    $usuarios = User::all();
    $edificios = Building::all();

    return view('apartments.create', compact('apartamento', 'usuarios', 'edificios'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @returnulln Response
   */
  public function createMultiple($id)
  {
    $edificio = Building::findOrFail($id);
    return view('apartments.createMultiple', compact('edificio'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ApartmentsRequest $request)
  {
    $apartamento = new Apartment($request->all());
    $apartamento->created_by = Auth::user()->id;
    $apartamento->updated_by = Auth::user()->id;
    $apartamento->save();

    flash('El Apartamento ha sido creado con exito.');
    return redirect()->action('BuildingsController@index');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function storeMultiple($id, MultipleApartmentsRequest $request)
  {
    $edificio = Building::findOrFail($id);
    if ($request->input('first_floor') === 'on'):
      $n = 0;
    endif;
    return $request->all();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $apartamento = Apartment::findOrFail($id);

    return view('apartments.show', compact('apartamento'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $apartamento = Apartment::findOrFail($id);
    $usuarios = User::all();
    $edificios = Building::all();

    return view('apartments.edit', compact('apartamento', 'edificios', 'usuarios'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, ApartmentsRequest $request)
  {
    $apartamento = Apartment::findOrFail($id);
    $apartamento->created_by = Auth::user()->id;
    $apartamento->updated_by = Auth::user()->id;
    $apartamento->update($request->all());

    flash('El Apartamento ha sido actualizado con exito.');
    return redirect()->action('BuildingsController@index');
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
