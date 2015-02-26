<?php namespace App\Http\Controllers;

use App\Http\Requests\MovementsRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Movement;
use App\Building;
use Auth;


class MovementsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return redirect()->action('IndexController@index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return redirect()->action('IndexController@index');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(MovementsRequest $request)
  {
    // se crea un nuevo objeto con los datos del formulario
    // se añaden los campos de creado por y actualizado por
    // y se inserta en la base de datos del sistema.
    $movimiento = new Movement($request->all());
    $movimiento->created_by = Auth::user()->id;
    $movimiento->updated_by = Auth::user()->id;
    $movimiento->save();

    // si el movimiento esta asociado a un item, se hace la relacion.
    if (trim($request->input('item_id')) !== '' and $request->input('item_id') !== '0') :
      $movimiento->items()->attach($request->input('item_id'));
    endif;
    
    // el mensaje de exito.
    flash('Movimiento ha sido creado con exito.');
    // redireccion a edificio tal.
    return redirect()->action(
      'BuildingsController@movements', 
      $request->input('building_id'
    ));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return redirect()->action('IndexController@index');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $movimiento = Movement::findOrFail($id);

    // el edifico
    $edificio = Building::where('id', $movimiento->building_id)->first();

    // por cada miembro de la gestion multifamiliar
    // se sacan las cuentas segun su responsable
    foreach ($edificio->miembrosDeGestion as $usuario) :
      $cuentas[] = \App\Account::where('user_id', $usuario->id)->get();
    endforeach;

    // todos los tipos de movimientos
    $tipos = \App\MovementType::all();

    // los items segun el id del edificio
    // para anclar concepto a un item
    $items = \App\Item::where('building_id', $id)->get();

    // la vista con todas las variables
    return view(
      'movements.edit', 
      compact(
        'movimiento',
        'edificio', 
        'cuentas', 
        'items', 
        'tipos'
      )
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, MovementsRequest $request)
  {
    $movimiento = Movement::findOrFail($id);

    $movimiento->update($request->all());
    $movimiento->updated_by = Auth::user()->id;
    $movimiento->updated_at = Carbon::now();

    // si el movimiento esta asociado a un item, se hace la relacion.
    if (trim($request->input('item_id')) !== '' and $request->input('item_id') !== '0') :
      if ($movimiento->items()->get()->isEmpty()) :
        $movimiento->items()->attach([$request->input('item_id')]);
      else :
        $movimiento->items()->sync([$request->input('item_id')]);
      endif;
    endif;

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
