<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $perfil)
    {
        session_start();
        if (isset($_SESSION['name']) && $_SESSION['name'] != '') {
            return $next($request);
        } else {
            return redirect()->route('site.login', ['erro' => 2]);
        }
    }
}
