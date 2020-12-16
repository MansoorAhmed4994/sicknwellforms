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
            'patient_email' => 'required',
            'telephone' => 'required',
            'sign_responsible_party' => 'required',  
            'date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        
        //dd($request->sign_responsible_party);
        $sign_responsible_party = app('App\Http\Controllers\SignaturePadController')->upload($request->sign_responsible_party);
        //dd($sign_responsible_party);
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


    public function submissions($client_form_id)
    { 
        $submissions = Pedim_consent_for_rapid_covid19_testings::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id;  
        return view('forms.pedim.pedim-consent-for-rapid-covid-19-testing.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
        //
    }


    public function edit($submission_id)
    {
        //
        $PedimConsentForRapidCovid19Testing = Pedim_consent_for_rapid_covid19_testings::find($submission_id); 
        $client_form_id = $PedimConsentForRapidCovid19Testing->client_forms_id; 
        return view('forms.pedim.pedim-consent-for-rapid-covid-19-testing.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'PedimConsentForRapidCovid19Testing' => $PedimConsentForRapidCovid19Testing)); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedim_consent_for_rapid_covid19_testings $consent_for_covid19)
    {

        $is_sign_responsible_party_updated = "nullable";

        if(request('sign_responsible_party_updated') == "yes")
        { 
            $is_sign_responsible_party_updated = "required";  
        }

        //
        $valiedation_from_array = [ 
            'patient_name' => 'required', 
            'patient_email' => 'required',
            'telephone' => 'required',
            'sign_responsible_party' => $is_sign_responsible_party_updated,  
            'date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);

        //dd($is_witness_signature_update);
        $sign_responsible_party = $request->sign_responsible_party_src;
        if(request('sign_responsible_party_updated') == "yes")
        {
        
            $patient_signature = app('App\Http\Controllers\SignaturePadController')->update($request->sign_responsible_party,$sign_responsible_party);
             
        }
    
        //dd($sign_responsible_party);
        $consent_for_covid19->patient_name = request('patient_name');
        $consent_for_covid19->is_patient_minor = request('is_patient_minor');
        $consent_for_covid19->parent_guardian = request('parent_guardian');
        $consent_for_covid19->patient_email = request('patient_email');
        $consent_for_covid19->telephone = request('telephone');
        $consent_for_covid19->sign_responsible_party = $sign_responsible_party;
        $consent_for_covid19->date = request('date');
        $consent_for_covid19->client_forms_id = request('client_forms_id');   
        $consent_for_covid19->status = 'active';  
        $update_status = $consent_for_covid19->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.PedimConsentForRapidCovid19Testing.submissions',$consent_for_covid19->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('PedimConsentForRapidCovid19Testing.submissions',$consent_for_covid19->client_forms_id);
            }

        }
        else
        {
            session()->flash("warning","Some thing went wrong, please Update again"); 
            return redirect()->back();

        }
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

    public function CreateZoomMeeting($id)
    { 
        $ZoomClientApi = new Client();
        $token = Str::random(60);
        $PedimConsentForRapidCovid19Testing = Pedim_consent_for_rapid_covid19_testings::find($id); 
        //$host = 'mansoor.zaheer994@gmail.com';
        $host = $PedimConsentForRapidCovid19Testing->client_forms->client->email;
        $participant = $PedimConsentForRapidCovid19Testing->email; 
        $timestamp = time();   
        $start_time = date("m/d/Y h:i:s a", $timestamp); 
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z'; 
        $timezone = appointment_limits::find($PedimConsentForRapidCovid19Testing->client_forms_id);
        $timezone = $timezone->time_zone; 
        
        $response = $ZoomClientApi->request('POST', env("SICKNWELL_ZOOM_API_URL"), [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ], 
            'form_params' => [ 
                'body' => [
        			'topic' => 'checkup',
        			'type' => 2,
        			'start_time' => $start_time,
        			'password' => '',
        			'agenda' => '',
                    'timezone' => $timezone,
                    'duration' => $duration
        		],
        		'host' => $host,
        		'participant' => $participant
            ],
            
        ]);
        
        $response = json_decode($response->getBody(),true);
        // dd($response);
        if(isset($response['code']))
        { 
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('client.PedimConsentForRapidCovid19Testing.submissions',$PedimConsentForRapidCovid19Testing->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('PedimConsentForRapidCovid19Testing.submissions',$PedimConsentForRapidCovid19Testing->client_forms_id);
            } 
        }
        else
        {
            session()->flash("warning","Some thing went wrong please Create meeting again.");
            return redirect()->back();
        }
    }
}
