<?php

namespace App\Http\Controllers\Forms\Pedim;


use App\Http\Controllers\Controller;
use App\Models\Forms\Pedim\pedim_feed_backs;
use Illuminate\Http\Request;
use App\Models\Client_forms;

class PedimFeedBackFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($client_form_id)
    { 

        return view('forms.pedim.pedim-feed-back-form.create')->with(array('client_form_id' => $client_form_id));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valiedation_from_array = [
             
            'patient_name' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'number' => 'required',
            'patient_email' => 'required',
            'contact_managment' => 'required',
            'description' => 'required',
            'answer' => 'required',
            'client_forms_id' => 'required',
            'status' => 'active'
            ];

            $this->validate($request, $valiedation_from_array);

            $SubmitStatus = pedim_feed_backs::create([
                'patient_name' => $request->patient_name,
                'appointment_date' => $request->appointment_date,
                'appointment_time' => $request->appointment_time,
                'number' => $request->number,
                'patient_email' => $request->patient_email,
                'contact_managment' => $request->contact_managment,
                'description' => $request->description,
                'answer' => $request->answer,
                'client_forms_id' => $request->client_forms_id,
                'status' => 'active'
            ]);
            
            if($SubmitStatus)
            {
                session()->flash("success","Successfully Submited");  
                return redirect()->route('PedimFeedBackForm',$request->client_forms_id);
            }
            else
            {
                session()->flash("warning","Some thing went Wrong, Try it again");  
                return redirect()->route('PedimFeedBackForm',$request->client_forms_id);
            }

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
    public function edit($submission_id)
    {
        //dd(Auth);
        $InOfficeAppointments = pedim_feed_backs::find($submission_id); 
        $client_form_id = $InOfficeAppointments->client_forms_id; 
        return view('forms.pedim.pedim-feed-back-form.edit')->with(array('client_form_id' => $client_form_id, 'InOfficeAppointmentsDetails' => $InOfficeAppointments)); 
        
        //
    }

 
    public function submissions($client_form_id)
    { 
        $submissions = pedim_feed_backs::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id;  
        return view('forms.pedim.pedim-feed-back-form.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
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
}
