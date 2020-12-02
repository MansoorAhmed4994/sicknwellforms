<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if(Auth::guard('clients'))
        // {
        //     dd('working');
        // }
        
        if($guard == 'web')
        {
            if (Auth::guard('web')->check()) 
            {
                return redirect('/admin/dashboard');
            }
            
        }
        elseif($guard == 'clients')
        {
            if (Auth::guard('clients')->check()) 
            {
                return redirect('/client/dashboard');
            } 
           
        } 
         
        return $next($request);
    }
}
