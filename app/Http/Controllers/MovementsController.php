<?php namespace App\Http\Controllers;

use App\Http\Requests\MovementsRequest;
use App\Http\Controllers\Controller;
use App\Movement;
use Auth;


class MovementsController extends Controller {

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
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(MovementsRequest $request)
  {
    $movimiento = new Movement($request->all());
    $movimiento->created_by = Auth::user()->id;
    $movimiento->updated_by = Auth::user()->id;
    $movimiento->save();
    $movimiento->items()->attach($request->input('item_id'));
    flash('Movimiento ha sido creado con exito.');
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
