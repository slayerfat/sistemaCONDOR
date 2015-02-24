<?php namespace App\Http\Controllers;

use App\Http\Requests\ItemsRequest;
use App\Http\Controllers\Controller;
use App\Item;
use App\Building;
use Auth;

class ItemsController extends Controller {

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
		$item = new Item;
		$edificios = Building::all();

		return view('items.create', compact('item', 'edificios'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ItemsRequest $request)
	{
		$item = new Item($request->all());
		$item->created_by = Auth::user()->id;
    $item->updated_by = Auth::user()->id;

    $item->save();

    flash('El nuevo Item ha sido creado con exito.');
		return redirect()->action('BuildingsController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Item::findOrFail($id);
		return view('items.show', compact('item'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Item::findOrFail($id);
		$edificios = Building::all();
		return view('items.edit', compact('item', 'edificios'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ItemsRequest $request)
	{
		$item = Item::findOrFail($id);
		$item->updated_at = Auth::user()->id;
		$item->update($request->all());

		flash('El item ha sido actualizado con exito.');
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
