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
use App\Models\Forms\Pedim\Pedim_minor_privacy_policy_and_consent_for_treatments;
use Auth;

class PedimMinorPrivacyPolicyAndConsentForTreatmentController extends Controller
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
        return view('forms.pedim.pedim-minor-privacy-policy-and-consent-for-treatment.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range));
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
            'parent_or_legal' => 'required',
            'patient_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'parent_signature' => 'required',
            'patients_today_date' => 'required',
            'witness_signature' => 'required',
            'witness_name' => 'required',  
            'witness_today_date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        $witness_signature = app('App\Http\Controllers\SignaturePadController')->upload($request->witness_signature);
        $parent_signature = app('App\Http\Controllers\SignaturePadController')->upload($request->parent_signature);

        $minor_privacy_policies = new Pedim_minor_privacy_policy_and_consent_for_treatments();
        $minor_privacy_policies->parent_or_legal = request('parent_or_legal');
        $minor_privacy_policies->patient_name = request('patient_name');
        $minor_privacy_policies->telephone = request('telephone');
        $minor_privacy_policies->email = request('email');
        $minor_privacy_policies->dob = request('dob');
        $minor_privacy_policies->parent_signature = $parent_signature;
        $minor_privacy_policies->patients_today_date = request('patients_today_date');
        $minor_privacy_policies->witness_signature = $witness_signature;
        $minor_privacy_policies->witness_name = request('witness_name');
        $minor_privacy_policies->witness_today_date = request('witness_today_date');
        $minor_privacy_policies->client_forms_id = request('client_forms_id');   
        $minor_privacy_policies->status = 'active';  
        $insert_status = $minor_privacy_policies->save();


        if($insert_status)
        {
            session()->flash("success","Successfully Submited");  
            return redirect()->route('PedimMinorPrivacyPolicyAndConsentForTreatment',$minor_privacy_policies->client_forms_id);
        }
        else
        {
            session()->flash("Warning","Some thing went wrong, Please try again.");  
            return redirect()->route('PedimMinorPrivacyPolicyAndConsentForTreatment',$minor_privacy_policies->client_forms_id);
        }
        
        
    }

    public function submissions($client_form_id)
    { 
        //dd($client_form_id);
        $submissions = Pedim_minor_privacy_policy_and_consent_for_treatments::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.pedim.pedim-minor-privacy-policy-and-consent-for-treatment.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
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
        $PedimMinorPrivacyPolicy = Pedim_minor_privacy_policy_and_consent_for_treatments::find($submission_id); 
        $client_form_id = $PedimMinorPrivacyPolicy->client_forms_id; 
        return view('forms.pedim.pedim-minor-privacy-policy-and-consent-for-treatment.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'PedimMinorPrivacyPolicy' => $PedimMinorPrivacyPolicy)); 
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedim_minor_privacy_policy_and_consent_for_treatments $Pedim_minor_data_id)
    { 
       // dd($Pedim_minor_data_id);
        $is_parent_signature_update = "nullable";
        $is_witness_signature_update = "nullable";
        if(request('parent_signature_updated') == "yes")
        {
        //echo 'working1';
            $is_parent_signature_update = "required"; 
             
        }

        if(request('witness_signature_updated') == "yes")
        { 
            $is_witness_signature_update = "required";  
        }
           

        $valiedation_from_array = [ 
            'parent_or_legal' => 'required',
            'patient_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'parent_signature' => $is_parent_signature_update,
            'patients_today_date' => 'required',
            'witness_signature' => $is_witness_signature_update,
            'witness_name' => 'required',  
            'witness_today_date' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        //dd($is_witness_signature_update);
        $parent_signature = $request->parent_signature_src;
        $witness_signature = $request->witness_signature_src;
        if(request('parent_signature_updated') == "yes")
        {
        
            $parent_signature = app('App\Http\Controllers\SignaturePadController')->update($request->parent_signature,$parent_signature);
             
        }
        if(request('witness_signature_updated') == "yes")
        {
        
            $witness_signature = app('App\Http\Controllers\SignaturePadController')->update($request->witness_signature,$witness_signature);
             
        }
 
        $Pedim_minor_data_id->parent_or_legal = request('parent_or_legal');
        $Pedim_minor_data_id->patient_name = request('patient_name');
        $Pedim_minor_data_id->telephone = request('telephone');
        $Pedim_minor_data_id->email = request('email');
        $Pedim_minor_data_id->dob = request('dob');
        $Pedim_minor_data_id->parent_signature = $parent_signature;
        $Pedim_minor_data_id->patients_today_date = request('patients_today_date');
        $Pedim_minor_data_id->witness_signature = $witness_signature;
        $Pedim_minor_data_id->witness_name = request('witness_name');
        $Pedim_minor_data_id->witness_today_date = request('witness_today_date');
        $Pedim_minor_data_id->client_forms_id = request('client_forms_id');   
        $Pedim_minor_data_id->status = 'active';  
        $update_status = $Pedim_minor_data_id->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.PedimMinorPrivacyPolicyAndConsentForTreatment.submissions',$Pedim_minor_data_id->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('PedimMinorPrivacyPolicyAndConsentForTreatment.submissions',$Pedim_minor_data_id->client_forms_id);
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
        $PedimMinorPrivacyPolicy = Pedim_minor_privacy_policy_and_consent_for_treatments::find($id); 
        //$host = 'mansoor.zaheer994@gmail.com';
        $host = $PedimMinorPrivacyPolicy->client_forms->client->email;
        $participant = $PedimMinorPrivacyPolicy->email; 
        $timestamp = time();   
        $start_time = date("m/d/Y h:i:s a", $timestamp); 
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z'; 
        $timezone = appointment_limits::find($PedimMinorPrivacyPolicy->client_forms_id);
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
                return redirect()->route('client.PedimMinorPrivacyPolicyAndConsentForTreatment.submissions',$PedimMinorPrivacyPolicy->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('PedimMinorPrivacyPolicyAndConsentForTreatment.submissions',$PedimMinorPrivacyPolicy->client_forms_id);
            } 
        }
        else
        {
            session()->flash("warning","Some thing went wrong please Create meeting again.");
            return redirect()->back();
        }
    }
}
