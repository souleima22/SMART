<?php

namespace App\Http\Middleware;

use Closure;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == "candidat") {
              return redirect()->route('candidat.index');
            }
            else if (Auth::user()->role == "recruteur") {
                return redirect()->route('Recruteur.index');
              }
        }
        return $next($request);
    }
}
