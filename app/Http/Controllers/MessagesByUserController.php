<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\User;
use App\Message;
use App\MessageType;
use Auth;

use Illuminate\Http\Request;

class MessagesByUserController extends Controller {

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $usuario = User::findOrFail($id);
    return view('messages.showByUser', compact('usuario'));
  }

}
