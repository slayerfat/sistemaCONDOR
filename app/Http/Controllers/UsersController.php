<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Sex;
use Auth;

use Illuminate\Http\Request;

class UsersController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $usuarios = User::all();
    return view('users.index', compact('usuarios'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $usuario = new User;
    $sexos = Sex::lists('description', 'id');

    return view('users.create', compact('usuario', 'sexos'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(UserRequest $request)
  {
    $usuario = new User($request->all());
    $usuario->save();
    flash('El usuario ha sido creado con exito.');
    return redirect()->action('IndexController@index');
    // return $usuario;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $usuario = User::findOrFail($id);

    return view('users.show', compact('usuario'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $usuario = User::findOrFail($id);
    $sexos = Sex::lists('description', 'id');

    return view('users.edit', compact('usuario', 'sexos'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, UserUpdateRequest $request)
  {
    $usuario = User::findOrFail($id);
    // actualiza el usuario
    $usuario->update($request->all());
    // mensaje de exito
    flash('El usuario ha sido actualizado con exito.');
    return redirect()->action('UsersController@index');
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
