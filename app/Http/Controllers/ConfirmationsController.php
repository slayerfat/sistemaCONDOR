<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\UserConfirmation;

use Illuminate\Http\Request;

class ConfirmationsController extends Controller {

  public function confirm($confirmation)
  {
    if ( !$confirmation ) :
      return redirect('/');
    endif;

    $confirmModel = UserConfirmation::where('confirmation', $confirmation)->first();

    if ( !$confirmModel ) :
      return redirect('/');
    endif;

    $usuario = User::findOrFail($confimModel->user_id);

    if (!$usuario->confirmacion) :
      $confirmModel->delete();
      return redirect('/');
    endif;

    $usuario->confirmacion()->delete();
    flash('Ud. ha sido correctamente verificado, por favor ingrese en el sistema.');
    return redirect('auth/login');
  }

}
