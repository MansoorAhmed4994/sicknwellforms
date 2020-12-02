<?php

namespace App\Http\Middleware; 
use Closure;

class FrameHeadersMiddleware
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
       
        $response = $next($request);
        $response->header('X-Frame-Options', 'ALLOWALL');
        return $response;
        
        // //x frame allow
        // $response = $next($request); 
        // $response->header('X-Frame-Options', 'ALLOW FROM *');
        // return $response;
    }
}
