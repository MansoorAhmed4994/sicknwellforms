<?php

namespace App\Http\Controllers\Forms\Pedim;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Forms\Pedim\Pedim_consent_for_rapid_covid19_testings;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Auth;

class PedimConsentForRapidCovid19TestingController extends Controller
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
        //dd('working');
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
            return view('forms.pedim.pedim-consent-for-rapid-covid-19-testing.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range)); 
            
            //
        }
        //return view('forms.pedim.pedim-consent-for-rapid-covid-19-testing.create');
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
            'is_patient_minor' => 'required',
            'patient_email' => 'required',
            'telephone' => 'required',
            'sign_responsible_party' => 'required',  
            'date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        $sign_responsible_party = app('App\Http\Controllers\SignaturePadController')->upload($request->sign_responsible_party);

        $consent_for_covid19 = new Pedim_consent_for_rapid_covid19_testings();
        $consent_for_covid19->patient_name = request('patient_name');
        $consent_for_covid19->is_patient_minor = request('is_patient_minor');
        $consent_for_covid19->parent_guardian = request('parent_guardian');
        $consent_for_covid19->patient_email = request('patient_email');
        $consent_for_covid19->telephone = request('telephone');
        $consent_for_covid19->sign_responsible_party = $sign_responsible_party;
        $consent_for_covid19->date = request('date');
        $consent_for_covid19->client_forms_id = request('client_forms_id');   
        $consent_for_covid19->status = 'active';  
        $consent_for_covid19->save();


        session()->flash("success","Successfully Submited");  
        //dd();
        return redirect()->route('PedimConsentForRapidCovid19Testing',$consent_for_covid19->client_forms_id);
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
