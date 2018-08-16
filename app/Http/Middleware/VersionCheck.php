<?php

namespace App\Http\Middleware;

use Closure;

class VersionCheck
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
        if($request->version == 5.6){
            echo "You're Laravel version is $request->version";
        } else{
            echo "Sorry version dose't match";
        }
        return $next($request);
    }
}
