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
use App\Models\Forms\Pedim\Pedim_adult_privacy_policy_consent_treatments;
use Auth;


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
        
        //dd($witness_signature);

        $valiedation_from_array = [ 
            'patient_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'patient_signature' => 'required',
            'patients_today_date' => 'required',
            'witness_signature' => 'required',
            'witness_name' => 'required',  
            'witness_today_date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        $witness_signature = app('App\Http\Controllers\SignaturePadController')->upload($request->witness_signature);
        $patient_signature = app('App\Http\Controllers\SignaturePadController')->upload($request->patient_signature);

        $adult_privacy_policies = new Pedim_adult_privacy_policy_consent_treatments();
        $adult_privacy_policies->patient_name = request('patient_name');
        $adult_privacy_policies->telephone = request('telephone');
        $adult_privacy_policies->email = request('email');
        $adult_privacy_policies->dob = request('dob');
        $adult_privacy_policies->patient_signature = $patient_signature;
        $adult_privacy_policies->patients_today_date = request('patients_today_date');
        $adult_privacy_policies->witness_signature = $witness_signature;
        $adult_privacy_policies->witness_name = request('witness_name');
        $adult_privacy_policies->witness_today_date = request('witness_today_date');
        $adult_privacy_policies->client_forms_id = request('client_forms_id');   
        $adult_privacy_policies->status = 'active';  
        $adult_privacy_policies->save();


        session()->flash("success","Successfully Submited");  dd();
        return redirect()->route('PedimAdultPrivacyPolicyAndConsentForTreatment',$adult_privacy_policies->client_forms_id);
    }

    


    public function submissions($client_form_id)
    { 
        //dd($client_form_id);
        $submissions = Pedim_adult_privacy_policy_consent_treatments::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.pedim.pedim-adult-privacy-policy-and-consent-for-treatment.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
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
        $PedimAdultPrivacyPolicy = Pedim_adult_privacy_policy_consent_treatments::find($submission_id); 
        $client_form_id = $PedimAdultPrivacyPolicy->client_forms_id; 
        return view('forms.pedim.pedim-adult-privacy-policy-and-consent-for-treatment.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'PedimAdultPrivacyPolicy' => $PedimAdultPrivacyPolicy)); 
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedim_adult_privacy_policy_consent_treatments $Pedim_adult_data_id)
    { 
        //dd($id);
        $is_patient_signature_update = "nullable";
        $is_witness_signature_update = "nullable";
        if(request('patient_signature_updated') == "yes")
        {
        //echo 'working1';
            $is_patient_signature_update = "required"; 
             
        }

        if(request('witness_signature_updated') == "yes")
        { 
            $is_witness_signature_update = "required";  
        }
           

        $valiedation_from_array = [ 
            'patient_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'patient_signature' => $is_patient_signature_update,
            'patients_today_date' => 'required',
            'witness_signature' => $is_witness_signature_update,
            'witness_name' => 'required',  
            'witness_today_date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        //dd($is_witness_signature_update);
        $patient_signature = $request->patient_signature_src;
        $witness_signature = $request->witness_signature_src;
        if(request('patient_signature_updated') == "yes")
        {
        
            $patient_signature = app('App\Http\Controllers\SignaturePadController')->update($request->patient_signature,$patient_signature);
             
        }
        if(request('witness_signature_updated') == "yes")
        {
        
            $witness_signature = app('App\Http\Controllers\SignaturePadController')->update($request->witness_signature,$witness_signature);
             
        }
 
        $Pedim_adult_data_id->patient_name = request('patient_name');
        $Pedim_adult_data_id->telephone = request('telephone');
        $Pedim_adult_data_id->email = request('email');
        $Pedim_adult_data_id->dob = request('dob');
        $Pedim_adult_data_id->patient_signature = $patient_signature;
        $Pedim_adult_data_id->patients_today_date = request('patients_today_date');
        $Pedim_adult_data_id->witness_signature = $witness_signature;
        $Pedim_adult_data_id->witness_name = request('witness_name');
        $Pedim_adult_data_id->witness_today_date = request('witness_today_date');
        $Pedim_adult_data_id->client_forms_id = request('client_forms_id');   
        $Pedim_adult_data_id->status = 'active';  
        $update_status = $Pedim_adult_data_id->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.PedimAdultPrivacyPolicyAndConsentForTreatment.submissions',$Pedim_adult_data_id->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('PedimAdultPrivacyPolicyAndConsentForTreatment.submissions',$Pedim_adult_data_id->client_forms_id);
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
        $PedimAdultPrivacyPolicy = Pedim_adult_privacy_policy_consent_treatments::find($id);
        //dd($PedimAdultPrivacyPolicy);
        $host = 'mansoor.zaheer994@gmail.com';
        // $host = $PedimAdultPrivacyPolicy->client_forms->client->email;
        $participant = $PedimAdultPrivacyPolicy->email;
        //dd($InOfficeAppointmentsDetails->email); 
        $timestamp = time();  
       // echo(date("m/d/Y h:i:s a", $timestamp));
        $start_time = date("m/d/Y h:i:s a", $timestamp);
        
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z';
        // dd($start_time); 
        //get time zone 
        $timezone = appointment_limits::find($PedimAdultPrivacyPolicy->client_forms_id);
        $timezone = $timezone->time_zone; 
        
        $response = $ZoomClientApi->request('POST', 'https://sicknwell.desenador.com/api/create-zoom-meeting', [
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
        //dd($response);
        if($response['code'] == '201')
        {
            //dd($response);
            
            
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('PedimAdultPrivacyPolicyAndConsentForTreatment.submissions',$PedimAdultPrivacyPolicy->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('PedimAdultPrivacyPolicyAndConsentForTreatment.submissions',$PedimAdultPrivacyPolicy->client_forms_id);
            } 
        }
        else{
            session()->flash("warning","Some thing went wrong please Create meeting again.");
        }
    }
}
