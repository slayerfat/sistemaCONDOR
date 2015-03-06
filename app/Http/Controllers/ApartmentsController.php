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
   * Show the form for creating a new resource.
   *
   * @returnulln Response
   */
  public function storePropietario($apartment_id, $user_id)
  {
    $apartamento = Apartment::findOrFail($apartment_id);
    return view('apartments.createMultiple', compact('apartamento'));
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

    $this->insertApartments($edificio, $request);

    flash('Apartamentos creados con exito');
    return redirect()->action('BuildingsController@show', $edificio->id);
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
    $usuarios    = User::all();

    return view('apartments.show', compact('apartamento', 'usuarios'));
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

  /**
   * iteraciones para insertar los apartamentos en algun
   * edificio segun el total de pisos con
   * o sin irregularidades.
   */
  private function insertApartments($edificio, $request){
    if ($edificio->total_floors == 0):
      flash()->error('El Edificio no posee pisos, favor actualizar');
      return redirect()->action('BuildingsController@edit', $edificio->id);
    endif;
    $p = $edificio->total_floors;
    $q = 0; // el total menos el ultimo piso
    $k = 1; // el numero de apartamento
    $n = $request->input('apartments');
    $j = 1; // control de pisos
    // si el edificio tiene un numero irregular
    // de apartamentos en el primer piso
    if ($request->input('first_floor') === 'no'):
      if (trim($request->input('first_floor_quantity')) == ''
        or $request->input('first_floor_quantity') == 0) :
        flash()->error('Debe especificar la cantidad si el primer piso no posee la misma cantidad.');
        return redirect()->back();
      endif;
      $j = abs($request->input('first_floor_quantity'));
      for ($i = 1; $i <= $j; $i++) :
        Apartment::create([
          'building_id' => $edificio->id,
          'user_id'     => null,
          'floor'       => 1,
          'number'      => $k,
          'created_by'  => Auth::user()->id,
          'updated_by'  => Auth::user()->id
        ]);
        $k++;
      endfor;
      $j = 2;
    endif;
    // si el edificio tiene un numero irregular
    // de apartamentos en el ultimo piso
    if ($request->input('last_floor') === 'no'):
      if (trim($request->input('last_floor_quantity')) == ''
        or $request->input('last_floor_quantity') == 0) :
        flash()->error('Debe especificar la cantidad si el ultimo piso no posee la misma cantidad.');
        return redirect()->back();
      endif;
      $q++;
      $p -= $q; // el total de pisos menos 1
    endif;
    // iteracion general
    for ($j; $j <= $p; $j++):
      for ($i = 1; $i <= $n; $i++):
        Apartment::create([
          'building_id' => $edificio->id,
          'user_id'     => null,
          'floor'       => $j,
          'number'      => $k,
          'created_by'  => Auth::user()->id,
          'updated_by'  => Auth::user()->id
        ]);
        $k++;
      endfor;
    endfor;
    // si el ultimo piso es irregular
    if ($q):
      $p++;
      for ($j; $j <= $p; $j++):
        $n = $request->input('last_floor_quantity');
        for ($i = 1; $i <= $n; $i++):
          Apartment::create([
            'building_id' => $edificio->id,
            'user_id'     => null,
            'floor'       => $j,
            'number'      => $k,
            'created_by'  => Auth::user()->id,
            'updated_by'  => Auth::user()->id
          ]);
          $k++;
        endfor;
      endfor;
    endif;
  }

}
