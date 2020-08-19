<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotMultiuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="multiuser")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(route('multiuser.login'));
        }
        return $next($request);
    }
}
