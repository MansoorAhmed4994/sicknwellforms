<?php

namespace App\Http\Controllers\client;
use App\Models\Clients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        //$this->working();
    }
    
   
    public function ClientFormsList()
    {   
        
        $id = Auth::id();
            $client = Clients::find($id); 
             // dd($client);
              
        //dd('working');
            return view('client.forms', 
            [
                'client' => $client
            ]);
        
    } 
 
}
