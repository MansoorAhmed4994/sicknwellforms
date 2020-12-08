<?php

namespace App\Http\Controllers\Forms\Pedim;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use App\Models\Adult_privacy_policy;


class PedimAdultPrivacyPolicyAndConsentForTreatmentController extends Controller
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
        
        $time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first();
        if($time_before_interval)
        {
            $time_before_interval->time_before_appointment;
        }
        else
        {
            $time_before_interval = '';
        }
        $appoint_date_range = appointment_limits::all()->where('client_forms_id', $client_form_id)->first(); 
        return view('forms.pedim.pedim-adult-privacy-policy-and-consent-for-treatment.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range)); 
       
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
        //
        $valiedation_from_array = [
            
            'patient_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'patient_signature' => 'required',
            'patients_today_date' => 'required',
            'witness_signature' => 'required',
            'witness_name' => 'required',  
            'witness_today_date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        

        $adult_privacy_policies = new Adult_privacy_policy();
        $adult_privacy_policies->patient_name = request('patient_name');
        $adult_privacy_policies->telephone = request('telephone');
        $adult_privacy_policies->email = request('email');
        $adult_privacy_policies->date_of_birth = request('date_of_birth');
        $adult_privacy_policies->patient_signature = request('patient_signature');
        $adult_privacy_policies->patients_today_date = request('patients_today_date');
        $adult_privacy_policies->witness_signature = request('witness_signature');
        $adult_privacy_policies->witness_name = request('witness_name');
        $adult_privacy_policies->witness_today_date = request('witness_today_date');
        $adult_privacy_policies->client_forms_id = request('client_forms_id');   
        $adult_privacy_policies->status = 'active';  
        $adult_privacy_policies->save();


        session()->flash("success","Successfully Submited");  
        return view('forms.status');
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
}
