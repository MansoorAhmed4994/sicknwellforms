<?php

namespace App\Http\Controllers\Forms\Mhst;


use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;     
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Illuminate\Support\Facades\Storage; 
use App\Models\Forms\Mhst\Mhst_medical_referral_forms;


use Illuminate\Support\Facades\File;
use Auth;

class MhstMedicalReferralFormController extends Controller
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
        return view('forms.mhst.mhst-medical-referral-form.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range));
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
            'provider_name' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'contact_person' => 'required',
            'patient_name' => 'required',
            'dob' => 'required',
            'phone' => 'required',  
            'email_patient' => 'required',
            'address_patient' => 'required',
            'city_patient' => 'required',
            'state_patient' => 'required',
            'zip_patient' => 'required',
            'height' => 'required',  
            'weight' => 'required',
            'neck_size' => 'required',
            'card_front' => 'required',
            'card_back' => 'required',
            'symptoms' => 'required',  
            'oxygen' => 'required',
            'diagnostic_codes' => 'required',
            'sleep_testing' => 'required',
            'comment' => 'required',
            'physician_name' => 'required',  
            'signature' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        $card_front = app('App\Http\Controllers\UploadImageController')->storage_upload($request->card_front,'/app/public/forms/Mhst/MhstMedicalReferralForm/');
        $card_back = app('App\Http\Controllers\UploadImageController')->storage_upload($request->card_back,'/app/public/forms/Mhst/MhstMedicalReferralForm/');
        $signature = app('App\Http\Controllers\SignaturePadController')->upload_signature($request->signature,'/app/public/forms/signatures/MhstMedicalReferralForm/');
        // dd($card_front , $card_back);
        $medical_referral_forms = new Mhst_medical_referral_forms();
        $medical_referral_forms->provider_name = request('provider_name');
        $medical_referral_forms->telephone = request('telephone');
        $medical_referral_forms->fax = request('fax');
        $medical_referral_forms->email = request('email');
        $medical_referral_forms->contact_person = request('contact_person');
        $medical_referral_forms->facility_name = request('facility_name');
        $medical_referral_forms->address = request('address');
        $medical_referral_forms->address_2 = request('address_2');
        $medical_referral_forms->city = request('city');
        $medical_referral_forms->state = request('state');
        $medical_referral_forms->zip = request('zip');
        $medical_referral_forms->patient_name = request('patient_name');
        $medical_referral_forms->dob = request('dob');
        $medical_referral_forms->phone = request('phone');
        $medical_referral_forms->alternate_phone = request('alternate_phone');
        $medical_referral_forms->email_patient = request('email_patient');
        $medical_referral_forms->address_patient = request('address_patient');
        $medical_referral_forms->address_2_patient = request('address_2_patient');
        $medical_referral_forms->city_patient = request('city_patient');
        $medical_referral_forms->state_patient = request('state_patient');
        $medical_referral_forms->zip_patient = request('zip_patient');
        $medical_referral_forms->height = request('height');
        $medical_referral_forms->weight = request('weight');
        $medical_referral_forms->neck_size = request('neck_size');
        $medical_referral_forms->card_front = $card_front;
        $medical_referral_forms->card_back = $card_back;
        $medical_referral_forms->symptoms = request('symptoms');
        $medical_referral_forms->oxygen = request('oxygen');
        $medical_referral_forms->lpm = request('lpm');
        $medical_referral_forms->diagnostic_codes = request('diagnostic_codes');
        $medical_referral_forms->sleep_testing = request('sleep_testing');
        $medical_referral_forms->comment = request('comment');
        $medical_referral_forms->physician_name = request('physician_name');
        $medical_referral_forms->signature = $signature;
        $medical_referral_forms->client_forms_id = request('client_forms_id');   
        $medical_referral_forms->status = 'active';  
        $medical_referral_forms->save();


        session()->flash("success","Successfully Submited");  
        return redirect()->route('MhstMedicalReferralForm',$medical_referral_forms->client_forms_id);
    }
    

    public function submissions($client_form_id)
    { 
        //dd($client_form_id);
        $submissions = Mhst_medical_referral_forms::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.mhst.mhst-medical-referral-form.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
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
        $MhstMedicalReferralForm = Mhst_medical_referral_forms::find($submission_id); 
        $client_form_id = $MhstMedicalReferralForm->client_forms_id; 
        return view('forms.mhst.mhst-medical-referral-form.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'MhstMedicalReferralForm' => $MhstMedicalReferralForm)); 
        
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mhst_medical_referral_forms $Mhst_medical_referral_data_id)
    { 
        // dd($Mhst_medical_referral_data_id);
        $signature_update = "nullable";
        if(request('signature_updated') == "yes")
        {
        //echo 'working1';
            $is_signature_update = "required"; 
             
        }

           

        $valiedation_from_array = [ 
            'provider_name' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'contact_person' => 'required',
            'patient_name' => 'required',
            'dob' => 'required',
            'phone' => 'required',  
            'email_patient' => 'required',
            'address_patient' => 'required',
            'city_patient' => 'required',
            'state_patient' => 'required',
            'zip_patient' => 'required',
            'height' => 'required',  
            'weight' => 'required',
            'neck_size' => 'required',
            'card_front' => 'required',
            'card_back' => 'required',
            'symptoms' => 'required',  
            'oxygen' => 'required',
            'diagnostic_codes' => 'required',
            'sleep_testing' => 'required',
            'comment' => 'required',
            'physician_name' => 'required',  
            'signature' => $is_signature_update,

        ];

        
        $this->validate($request, $valiedation_from_array);
        //dd($is_witness_signature_update);
        $signature = $request->signature_src;
        if(request('signature_updated') == "yes")
        {
        
            $signature = app('App\Http\Controllers\SignaturePadController')->update($request->signature,$signature);
             
        }
       
        $Mhst_medical_referral_data_id->provider_name = request('provider_name');
        $Mhst_medical_referral_data_id->telephone = request('telephone');
        $Mhst_medical_referral_data_id->fax = request('fax');
        $Mhst_medical_referral_data_id->email = request('email');
        $Mhst_medical_referral_data_id->contact_person = request('contact_person');
        $Mhst_medical_referral_data_id->facility_name = request('facility_name');
        $Mhst_medical_referral_data_id->address = request('address');
        $Mhst_medical_referral_data_id->address_2 = request('address_2');
        $Mhst_medical_referral_data_id->city = request('city');
        $Mhst_medical_referral_data_id->state = request('state');
        $Mhst_medical_referral_data_id->zip = request('zip');
        $Mhst_medical_referral_data_id->patient_name = request('patient_name');
        $Mhst_medical_referral_data_id->dob = request('dob');
        $Mhst_medical_referral_data_id->phone = request('phone');
        $Mhst_medical_referral_data_id->alternate_phone = request('alternate_phone');
        $Mhst_medical_referral_data_id->email_patient = request('email_patient');
        $Mhst_medical_referral_data_id->address_patient = request('address_patient');
        $Mhst_medical_referral_data_id->address_2_patient = request('address_2_patient');
        $Mhst_medical_referral_data_id->city_patient = request('city_patient');
        $Mhst_medical_referral_data_id->state_patient = request('state_patient');
        $Mhst_medical_referral_data_id->zip_patient = request('zip_patient');
        $Mhst_medical_referral_data_id->height = request('height');
        $Mhst_medical_referral_data_id->weight = request('weight');
        $Mhst_medical_referral_data_id->neck_size = request('neck_size');
        $Mhst_medical_referral_data_id->card_front = request('card_front');
        $Mhst_medical_referral_data_id->card_back = request('card_back');
        $Mhst_medical_referral_data_id->symptoms = request('symptoms');
        $Mhst_medical_referral_data_id->oxygen = request('oxygen');
        $Mhst_medical_referral_data_id->lpm = request('lpm');
        $Mhst_medical_referral_data_id->diagnostic_codes = request('diagnostic_codes');
        $Mhst_medical_referral_data_id->sleep_testing = request('sleep_testing');
        $Mhst_medical_referral_data_id->comment = request('comment');
        $Mhst_medical_referral_data_id->physician_name = request('physician_name');
        $Mhst_medical_referral_data_id->signature = $signature;
        $Mhst_medical_referral_data_id->client_forms_id = request('client_forms_id');   
        $Mhst_medical_referral_data_id->status = 'active';  
        $update_status = $Mhst_medical_referral_data_id->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.MhstMedicalReferralForm.submissions',$Mhst_medical_referral_data_id->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('MhstMedicalReferralForm.submissions',$Mhst_medical_referral_data_id->client_forms_id);
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
        $MhstMedicalReferralForm = Mhst_medical_referral_forms::find($id); 
        // $host = 'usmanjawed458@gmail.com';
        $host = $MhstMedicalReferralForm->client_forms->client->email;
        $participant = $MhstMedicalReferralForm->email_patient; 
        $timestamp = time();   
        $start_time = date("m/d/Y h:i:s a", $timestamp); 
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z'; 
        $timezone = appointment_limits::find($MhstMedicalReferralForm->client_forms_id);
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
                return redirect()->route('client.MhstMedicalReferralForm.submissions',$MhstMedicalReferralForm->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('MhstMedicalReferralForm.submissions',$MhstMedicalReferralForm->client_forms_id);
            } 
        }
        else
        {
            session()->flash("warning","Some thing went wrong please Create meeting again.");
            return redirect()->back();
        }
    }


}
