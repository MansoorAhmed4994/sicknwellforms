<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index()
    {
        $clients = Clients::orderBy('id','desc')->get();
        return view('clients.list')->with(array('clients'=>$clients)); 
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function client_info($client_id)
    {
        $clients = Clients::all()->where('id', $client_id)->first()->toArray();
        //dd($clients);
        return view('clients.details')->with(array('clients'=>$clients)); 
    }

    public function GetVerifiedClient(Request $request)
    {
        //dd($request->client_id);
        $email = $request->id;
        $client_id = $request->client_id;
        $clients = Clients::where('email', $email)->get();
        //dd($clients);
        if(Hash::check($request->pass, $clients[0]->password) && $clients[0]->id == $client_id)
        {
            //dd($clients);
            return  response()->json(['status'=>true,"client"=>$clients[0]],200);
            
        } 
        else
        {
            return  response()->json(['status'=>false],200);
        }
        // if(Hash::check($request->pass, $clients[0]->password) && $clients[0]->id == $client_id )
        // {
        //     return  response()->json(['status'=>true,"client"=>$clients[0]],200);
            
        // } 
        // else
        // {
        //     return  response()->json(['status'=>false],200);
        // }
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function formInit($form)
    {
        return view('form', compact('form'));
    }
}
