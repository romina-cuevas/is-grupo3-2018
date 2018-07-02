<?php

namespace App\Http\Middleware;

use Closure;

class MessageMiddleware
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
        $nombre = $request->input('name');
        if($nombre === 'joaquin')
        {
            return response('Joaquin no puedes ingresar.Nombre invalido',400);
        }
        return $next($request);
    }
}
