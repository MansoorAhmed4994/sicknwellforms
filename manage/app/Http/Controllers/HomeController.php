<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function testing()
    {
       
        $client = new Client(); 
        //  $response = $client->post('https://sicknwell.desenador.com/api/test123', ['firstname'=> 'faizan' , 'lastname'=>'pass', 'email'=>'faizanzaheer747@gmail.com', 'pass' => '123']);
        
        $token = Str::random(60);
        // $response = $client->request('POST', 'https://sicknwell.desenador.com/api/test123', [
        // 'headers' => [
        //     'Authorization' => 'Bearer '.$token,
        //     'Accept' => 'application/json',
        //     ],
        // ]);
        
        
        $response = $client->request('POST', 'https://sicknwell.desenador.com/api/test123', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
            'form_params' => [ 
                'firstname' => 'testing',
                'lastname'=>'pass',
                'email'=>'faizanzaheer747@gmail.com',
                'pass' => '123'
            ],
        ]);
        

        
        $response = json_decode($response->getBody(),true);
        dd($response);
        if($response['code'] == '201')
        {
            dd($response);   
        }
        else
        {
            dd($response['message']); 
        }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
