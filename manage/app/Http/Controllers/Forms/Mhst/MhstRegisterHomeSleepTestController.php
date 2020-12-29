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
use App\Models\Forms\Mhst\Mhst_register_home_sleep_tests;
use Auth;

class MhstRegisterHomeSleepTestController extends Controller
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
        //
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
        return view('forms.mhst.mhst-register-home-sleep-test.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range));

        
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
         
        $is_patient_minor_validated = "nullable";

        $is_patient_minor = "no";

        $pay_via_credit_card = "nullable";
        $patient_name = "nullable";

        $full_name = "nullable";


        if(request('is_patient_minor') == "yes")
        {
            
            $is_patient_minor_validated = "required";
            
            $is_patient_minor = request('is_patient_minor');
             
        }
        if(request('pay_via_credit_card') == "Telemedicine Consultation $ 98.00" || request('pay_via_credit_card') == "Home Sleep Test $ 169.00" || request('pay_via_credit_card') == "Telemedicine Follow-up Consultation $ 98.00" || request('pay_via_credit_card') == "Telemedicine Consultation & Home Sleep Test (Options 1 & 2 combined) $ 250.00" || request('pay_via_credit_card') == "Telemedicine Consultation, Home Sleep Test & Follow-up Telemedicine Consult (Options 1, 2 & 3 combined) $ 300.00")
        { 
            //dd('working');
            
            $valiedation_from_array = [ 
                'is_patient_minor' => $is_patient_minor_validated,
                'full_name' => 'required',
                'email' => 'required',
                'number' => 'required',
                'state' => 'required',
                'hear_about_us' => 'required',
                'shipping_address' => 'required',
                'shipping_city' => 'required',
                'shipping_state' => 'required',
                'shipping_zip' => 'required',  
                'dob' => 'required',
                'gender' => 'required',
                'name_patient_terms' => 'required',
                'dob_patient_terms' => 'required',
                'email_patient_terms' => 'required',
                'patient_telephone_terms' => 'required',
                'term_condition' => 'required',
                'todate' => 'required',
                'signature' => 'required',
                'full_name_patient_terms' => 'required',  
                'legal_signature' => 'required',
                'name_questions' => 'required',
                'email_questions' => 'required',
                'telephone_questions' => 'required',  
                'dob_questions' => 'required'
    
            ];
    
            
            $this->validate($request, $valiedation_from_array);
        }
        

        else if(request('patient_name') != "")
        { 
            //dd('working2');
            
            $valiedation_from_array = [

                'is_patient_minor' => $is_patient_minor_validated,
                'patient_email' => 'required',
                'insurance_name' => 'required',
                'member_id_1' => 'required',
                'subcribers_name_1' => 'required',
                'secondary_insurance_name' => 'required',  
                'member_id_2' => 'required',
                'subcribers_name_2' => 'required',
                'front_card' => 'required',
                'back_card' => 'required',
                'physician_tel' => 'required',
                'extension' => 'required',
                'phy_script' => 'required',
                'full_name' => 'required',
                'email' => 'required',
                'number' => 'required',
                'state' => 'required',
                'hear_about_us' => 'required',
                'shipping_address' => 'required',
                'shipping_city' => 'required',
                'shipping_state' => 'required',
                'shipping_zip' => 'required',  
                'dob' => 'required',
                'gender' => 'required',
                'name_patient_terms' => 'required',
                'dob_patient_terms' => 'required',
                'email_patient_terms' => 'required',
                'patient_telephone_terms' => 'required',
                'term_condition' => 'required',
                'todate' => 'required',
                'signature' => 'required',
                'full_name_patient_terms' => 'required',  
                'legal_signature' => 'required',
                'name_questions' => 'required',
                'email_questions' => 'required',
                'telephone_questions' => 'required',  
                'dob_questions' => 'required'
    
            ];
    
            
            $this->validate($request, $valiedation_from_array);
        }

        else if(request('full_name') != "")
        { 
            //dd('working3');
            
            $valiedation_from_array = [ 
                'patient_name' => 'required',
                'patient_email' => 'required',
                'insurance_name' => 'required',
                'member_id_1' => 'required',
                'subcribers_name_1' => 'required',
                'secondary_insurance_name' => 'required',  
                'member_id_2' => 'required',
                'subcribers_name_2' => 'required',
                'front_card' => 'required',
                'back_card' => 'required',
                'physician_tel' => 'required',
                'extension' => 'required',
                'phy_script' => 'required',
                'pay_via_credit_card' => 'required'
            ];
    
            
            $this->validate($request, $valiedation_from_array);
        }
        
        

        //dd('not working');

        $valiedation_from_array = [ 
            'is_patient_minor' => $is_patient_minor_validated,
            'full_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'state' => 'required',
            'hear_about_us' => 'required',
            'shipping_address' => 'required',
            'shipping_city' => 'required',
            'shipping_state' => 'required',
            'shipping_zip' => 'required',  
            'dob' => 'required',
            'gender' => 'required',
            'name_patient_terms' => 'required',
            'dob_patient_terms' => 'required',
            'email_patient_terms' => 'required',
            'patient_telephone_terms' => 'required',
            'term_condition' => 'required',
            'todate' => 'required',
            'signature' => 'required',
            'full_name_patient_terms' => 'required',  
            'legal_signature' => 'required',
            'name_questions' => 'required',
            'email_questions' => 'required',
            'telephone_questions' => 'required',  
            'dob_questions' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);
        
        $signature = app('App\Http\Controllers\SignaturePadController')->upload($request->signature);
        

        $register_home_sleep = new Mhst_register_home_sleep_tests();
        $register_home_sleep->full_name = request('full_name');
        $register_home_sleep->email = request('email');
        $register_home_sleep->number = request('number');
        $register_home_sleep->d_number = request('d_number');
        $register_home_sleep->state = request('state');
        $register_home_sleep->hear_about_us = request('hear_about_us');
        $register_home_sleep->shipping_address = request('shipping_address');
        $register_home_sleep->shipping_line = request('shipping_line');
        $register_home_sleep->shipping_city = request('shipping_city');
        $register_home_sleep->shipping_state = request('shipping_state');
        $register_home_sleep->shipping_zip = request('shipping_zip');
        $register_home_sleep->dob = request('dob');
        $register_home_sleep->gender = request('gender');
        $register_home_sleep->race = request('race');
        $register_home_sleep->preferred_language = request('preferred_language');
        $register_home_sleep->pay_via_credit_card = request('pay_via_credit_card');
        $register_home_sleep->patient_name = request('patient_name');
        $register_home_sleep->patient_email = request('patient_email');
        $register_home_sleep->insurance_name = request('insurance_name');
        $register_home_sleep->member_id_1 = request('member_id_1');
        $register_home_sleep->subcribers_name_1 = request('subcribers_name_1');
        $register_home_sleep->secondary_insurance_name = request('secondary_insurance_name');
        $register_home_sleep->member_id_2 = request('member_id_2');
        $register_home_sleep->subcribers_name_2 = request('subcribers_name_2');
        $register_home_sleep->front_card = request('front_card');
        $register_home_sleep->back_card = request('back_card');
        $register_home_sleep->patient_physician = request('patient_physician');
        $register_home_sleep->physician_tel = request('physician_tel');
        $register_home_sleep->extension = request('extension');
        $register_home_sleep->phy_script = request('phy_script');
        $register_home_sleep->name_patient_terms = request('name_patient_terms');
        $register_home_sleep->dob_patient_terms = request('dob_patient_terms');
        $register_home_sleep->is_patient_minor = $is_patient_minor;
        $register_home_sleep->parent_guardian = request('parent_guardian');
        $register_home_sleep->email_patient_terms = request('email_patient_terms');
        $register_home_sleep->patient_telephone_terms = request('patient_telephone_terms');
        $register_home_sleep->term_condition = request('term_condition');
        $register_home_sleep->todate = request('todate');
        $register_home_sleep->signature = $signature;
        $register_home_sleep->full_name_patient_terms = request('full_name_patient_terms');
        $register_home_sleep->legal_signature = request('legal_signature');
        $register_home_sleep->name_questions = request('name_questions');
        $register_home_sleep->email_questions = request('email_questions');
        $register_home_sleep->telephone_questions = request('telephone_questions');
        $register_home_sleep->dob_questions = request('dob_questions');
        $register_home_sleep->snoring = request('snoring');
        $register_home_sleep->tired = request('tired');
        $register_home_sleep->observed = request('observed');
        $register_home_sleep->pressure = request('pressure');
        $register_home_sleep->body = request('body');;
        $register_home_sleep->age = request('age');
        $register_home_sleep->neck = request('neck');
        $register_home_sleep->gender_questions = request('gender_questions');
        $register_home_sleep->client_forms_id = request('client_forms_id');   
        $register_home_sleep->status = 'active';  
        $insert_status = $register_home_sleep->save();


        if($insert_status)
        {
            session()->flash("success","Successfully Submited");  
            return redirect()->route('MhstRegisterHomeSleepTest',$register_home_sleep->client_forms_id);
        }
        else
        {
            session()->flash("Warning","Some thing went wrong, Please try again.");  
            return redirect()->route('MhstRegisterHomeSleepTest',$register_home_sleep->client_forms_id);
        }
    }

    public function submissions($client_form_id)
    { 
        //dd($client_form_id);
        $submissions = Mhst_register_home_sleep_tests::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.mhst.mhst-register-home-sleep-test.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
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
        $MhstRegiterHomeSleep = Mhst_register_home_sleep_tests::find($submission_id); 
        $client_form_id = $MhstRegiterHomeSleep->client_forms_id; 
        return view('forms.mhst.mhst-register-home-sleep-test.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'MhstRegiterHomeSleep' => $MhstRegiterHomeSleep)); 
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mhst_register_home_sleep_tests $register_home_sleep)
    {
        //
        $is_patient_minor_validated = "nullable";

        $is_patient_minor = "no";

        $pay_via_credit_card = "nullable";
        $patient_name = "nullable";

        $full_name = "nullable";

        $signature_update = "nullable";

        //dd($full_name);

        if(request('signature_updated') == "yes")
        {
        //echo 'working1';
            $is_signature_update = "required"; 
             
        }


        if(request('is_patient_minor') == "yes")
        {
            
            $is_patient_minor_validated = "required";
            
            $is_patient_minor = request('is_patient_minor');
             
        }
        if(request('pay_via_credit_card') == "Telemedicine Consultation $ 98.00" || request('pay_via_credit_card') == "Home Sleep Test $ 169.00" || request('pay_via_credit_card') == "Telemedicine Follow-up Consultation $ 98.00" || request('pay_via_credit_card') == "Telemedicine Consultation & Home Sleep Test (Options 1 & 2 combined) $ 250.00" || request('pay_via_credit_card') == "Telemedicine Consultation, Home Sleep Test & Follow-up Telemedicine Consult (Options 1, 2 & 3 combined) $ 300.00")
        { 
            //dd('working');
            
            $valiedation_from_array = [ 
                'is_patient_minor' => $is_patient_minor_validated,
                'full_name' => 'required',
                'email' => 'required',
                'number' => 'required',
                'state' => 'required',
                'hear_about_us' => 'required',
                'shipping_address' => 'required',
                'shipping_city' => 'required',
                'shipping_state' => 'required',
                'shipping_zip' => 'required',  
                'dob' => 'required',
                'gender' => 'required',
                'name_patient_terms' => 'required',
                'dob_patient_terms' => 'required',
                'email_patient_terms' => 'required',
                'patient_telephone_terms' => 'required',
                'term_condition' => 'required',
                'todate' => 'required',
                'signature' => 'required',
                'full_name_patient_terms' => 'required',  
                'legal_signature' => 'required',
                'name_questions' => 'required',
                'email_questions' => 'required',
                'telephone_questions' => 'required',  
                'dob_questions' => 'required'
    
            ];
    
            
            $this->validate($request, $valiedation_from_array);
        }
        

        else if(request('patient_name') != "")
        { 
            //dd('working2');
            
            $valiedation_from_array = [

                'is_patient_minor' => $is_patient_minor_validated,
                'patient_email' => 'required',
                'insurance_name' => 'required',
                'member_id_1' => 'required',
                'subcribers_name_1' => 'required',
                'secondary_insurance_name' => 'required',  
                'member_id_2' => 'required',
                'subcribers_name_2' => 'required',
                'front_card' => 'required',
                'back_card' => 'required',
                'physician_tel' => 'required',
                'extension' => 'required',
                'phy_script' => 'required',
                'full_name' => 'required',
                'email' => 'required',
                'number' => 'required',
                'state' => 'required',
                'hear_about_us' => 'required',
                'shipping_address' => 'required',
                'shipping_city' => 'required',
                'shipping_state' => 'required',
                'shipping_zip' => 'required',  
                'dob' => 'required',
                'gender' => 'required',
                'name_patient_terms' => 'required',
                'dob_patient_terms' => 'required',
                'email_patient_terms' => 'required',
                'patient_telephone_terms' => 'required',
                'term_condition' => 'required',
                'todate' => 'required',
                'signature' => 'required',
                'full_name_patient_terms' => 'required',  
                'legal_signature' => 'required',
                'name_questions' => 'required',
                'email_questions' => 'required',
                'telephone_questions' => 'required',  
                'dob_questions' => 'required'
    
            ];
    
            
            $this->validate($request, $valiedation_from_array);
        }

        else if(request('full_name') != "")
        { 
            //dd('working3');
            
            $valiedation_from_array = [ 
                'patient_name' => 'required',
                'patient_email' => 'required',
                'insurance_name' => 'required',
                'member_id_1' => 'required',
                'subcribers_name_1' => 'required',
                'secondary_insurance_name' => 'required',  
                'member_id_2' => 'required',
                'subcribers_name_2' => 'required',
                'front_card' => 'required',
                'back_card' => 'required',
                'physician_tel' => 'required',
                'extension' => 'required',
                'phy_script' => 'required',
                'pay_via_credit_card' => 'required'
            ];
    
            
            $this->validate($request, $valiedation_from_array);
        }
        
        

        //dd('not working');

        $valiedation_from_array = [ 
            'is_patient_minor' => $is_patient_minor_validated,
            'full_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'state' => 'required',
            'hear_about_us' => 'required',
            'shipping_address' => 'required',
            'shipping_city' => 'required',
            'shipping_state' => 'required',
            'shipping_zip' => 'required',  
            'dob' => 'required',
            'gender' => 'required',
            'name_patient_terms' => 'required',
            'dob_patient_terms' => 'required',
            'email_patient_terms' => 'required',
            'patient_telephone_terms' => 'required',
            'term_condition' => 'required',
            'todate' => 'required',
            'signature' => 'required',
            'full_name_patient_terms' => 'required',  
            'legal_signature' => 'required',
            'name_questions' => 'required',
            'email_questions' => 'required',
            'telephone_questions' => 'required',  
            'dob_questions' => 'required'

        ];

        
        $this->validate($request, $valiedation_from_array);

        $signature = $request->signature_src;
        if(request('signature_updated') == "yes")
        {
        
            $signature = app('App\Http\Controllers\SignaturePadController')->update($request->signature,$signature);
             
        }
        
        $register_home_sleep->full_name = request('full_name');
        $register_home_sleep->email = request('email');
        $register_home_sleep->number = request('number');
        $register_home_sleep->d_number = request('d_number');
        $register_home_sleep->state = request('state');
        $register_home_sleep->hear_about_us = request('hear_about_us');
        $register_home_sleep->shipping_address = request('shipping_address');
        $register_home_sleep->shipping_line = request('shipping_line');
        $register_home_sleep->shipping_city = request('shipping_city');
        $register_home_sleep->shipping_state = request('shipping_state');
        $register_home_sleep->shipping_zip = request('shipping_zip');
        $register_home_sleep->dob = request('dob');
        $register_home_sleep->gender = request('gender');
        $register_home_sleep->race = request('race');
        $register_home_sleep->preferred_language = request('preferred_language');
        $register_home_sleep->pay_via_credit_card = request('pay_via_credit_card');
        $register_home_sleep->patient_name = request('patient_name');
        $register_home_sleep->patient_email = request('patient_email');
        $register_home_sleep->insurance_name = request('insurance_name');
        $register_home_sleep->member_id_1 = request('member_id_1');
        $register_home_sleep->subcribers_name_1 = request('subcribers_name_1');
        $register_home_sleep->secondary_insurance_name = request('secondary_insurance_name');
        $register_home_sleep->member_id_2 = request('member_id_2');
        $register_home_sleep->subcribers_name_2 = request('subcribers_name_2');
        $register_home_sleep->front_card = request('front_card');
        $register_home_sleep->back_card = request('back_card');
        $register_home_sleep->patient_physician = request('patient_physician');
        $register_home_sleep->physician_tel = request('physician_tel');
        $register_home_sleep->extension = request('extension');
        $register_home_sleep->phy_script = request('phy_script');
        $register_home_sleep->name_patient_terms = request('name_patient_terms');
        $register_home_sleep->dob_patient_terms = request('dob_patient_terms');
        $register_home_sleep->is_patient_minor = $is_patient_minor;
        $register_home_sleep->parent_guardian = request('parent_guardian');
        $register_home_sleep->email_patient_terms = request('email_patient_terms');
        $register_home_sleep->patient_telephone_terms = request('patient_telephone_terms');
        $register_home_sleep->term_condition = request('term_condition');
        $register_home_sleep->todate = request('todate');
        $register_home_sleep->signature = $signature;
        $register_home_sleep->full_name_patient_terms = request('full_name_patient_terms');
        $register_home_sleep->legal_signature = request('legal_signature');
        $register_home_sleep->name_questions = request('name_questions');
        $register_home_sleep->email_questions = request('email_questions');
        $register_home_sleep->telephone_questions = request('telephone_questions');
        $register_home_sleep->dob_questions = request('dob_questions');
        $register_home_sleep->snoring = request('snoring');
        $register_home_sleep->tired = request('tired');
        $register_home_sleep->observed = request('observed');
        $register_home_sleep->pressure = request('pressure');
        $register_home_sleep->body = request('body');;
        $register_home_sleep->age = request('age');
        $register_home_sleep->neck = request('neck');
        $register_home_sleep->gender_questions = request('gender_questions');
        $register_home_sleep->client_forms_id = request('client_forms_id');   
        $register_home_sleep->status = 'active';  
        $update_status = $register_home_sleep->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.MhstRegisterHomeSleepTest.submissions',$register_home_sleep->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('MhstRegisterHomeSleepTest.submissions',$register_home_sleep->client_forms_id);
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
}
