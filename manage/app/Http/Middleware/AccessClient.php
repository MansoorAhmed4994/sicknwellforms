<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AccessClient
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
        
        if (Auth::guard('clients')->check() == true) 
        {
            
            return $next($request);
            //return redirect('/client/dashboard');
        } 
       
        return redirect('/clients/login');
        
    }
}
