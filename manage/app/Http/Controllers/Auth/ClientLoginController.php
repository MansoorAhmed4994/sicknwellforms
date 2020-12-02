<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientLoginController extends Controller
{
    public function ShowLoginForm()
    {  
        if (Auth::guard('clients')->check() == true) 
        {   
            return redirect()->route('client.dashboard');
        }
        elseif (Auth::guard('web')->check() == true) 
        {   
            return redirect()->route('admin.dashboard');
        }
        else
        {
            //dd('no working');
            return view('clients.login');
        }
    //return view('clients.login');
    } 

    public function login(Request $request) 
    {   
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
       
        
            //echo 'working';
        if(Auth::guard('clients')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) 
        {   
            //dd(Auth::guard('clients')->check());
            //dd();
            return redirect()->intended(route('client.dashboard'));
        } else {
            dd('invalid credentials');
        }
        return redirect()->back()->withInput($request->only('email','remember')); 
    }
    
    public function logout()
    {
        // if(auth()->user())
        // {
        //     echo 'wtill';
        // }
        auth('clients')->logout();
        return redirect('/');
    }
 
}
