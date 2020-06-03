<?php

namespace App\Http\Middleware;

use Closure;

class BanCheck
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
        if(auth()->user() != null){
            if(auth()->user()->ban == true){
                auth()->logout();
                return response()->json(['error' => 'Baned'], 401);
            }
        }
        return $next($request);
    }
}
