<?php

namespace App\Http\Middleware;

use Closure;

class Ip
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
        $requestIp = $request->ip();
        $authorizeIp = '127.0.0.1';

        if ($requestIp !== $authorizeIp) {
            return response('Unauthorized IP', 401);
        }
        
        return $next($request);
    }
}
