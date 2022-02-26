<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class RestrictIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $badIps = Config::get('constants.badIps');
        if(in_array($request->ip(), $badIps)){
            abort(403, 'tatomarporculo');
        }
        
        return $next($request);
    }
}
