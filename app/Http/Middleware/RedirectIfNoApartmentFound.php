<?php namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Otros\Chequeo;

class RedirectIfNoApartmentFound {

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if (Chequeo::obtenerApartamentos())return $next($request);

    flash()->error('Ud. no posee apartamentos asociados para esta accion.');
    return redirect('/');
  }

}
