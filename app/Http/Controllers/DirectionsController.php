<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use App\Town;
use App\Parish;

use Illuminate\Http\Request;

class DirectionsController extends Controller {

	public function states()
  {
    return State::all();
  }

  public function towns($id)
  {
    return Town::where('state_id', $id)->get();
  }

  public function town($id)
  {
    $municipio = Town::where('id', $id)->first();
    $numero = $municipio->state_id;
    return Town::where('state_id', $numero)->get();
  }

  public function parishes($id)
  {
    return Parish::where('town_id', $id)->get();
  }

  public function parish($id)
  {
    $parroquia = Parish::where('id', $id)->first();
    $numero = $parroquia->town_id;
    return Parish::where('town_id', $numero)->get();
  }

}
