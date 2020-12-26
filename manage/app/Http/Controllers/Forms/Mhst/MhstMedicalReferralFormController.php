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
        $signature = app('App\Http\Controllers\SignaturePadController')->upload($request->signature);

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
        $medical_referral_forms->card_front = request('card_front');
        $medical_referral_forms->card_back = request('card_back');
        $medical_referral_forms->symptoms = request('symptoms');
        $medical_referral_forms->oxygen = request('oxygen');
        $medical_referral_forms->lpm = request('lpm');
        $medical_referral_forms->diagnostic_codes = request('diagnostic_codes');
        $medical_referral_forms->sleep_testing = request('sleep_testing');
        $medical_referral_forms->comment = request('comment');
        $medical_referral_forms->physician_name = request('physician_name');
        $medical_referral_forms->signature = request('signature');
        $medical_referral_forms->client_forms_id = request('client_forms_id');   
        $medical_referral_forms->status = 'active';  
        $medical_referral_forms->save();


        session()->flash("success","Successfully Submited");  
        return redirect()->route('MhstMedicalReferralForm',$medical_referral_forms->client_forms_id);
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
