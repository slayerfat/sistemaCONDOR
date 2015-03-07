<?php namespace App\Http\Middleware;

use Closure;

class RedirectIfPorVerificar {

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if ( $request->user()->desactivado() )
    {
      flash()->error('Ud. todavia no ha verificado su cuenta en el sistema.');
      return redirect('/por-verificar');
    }
    return $next($request);
  }

}
