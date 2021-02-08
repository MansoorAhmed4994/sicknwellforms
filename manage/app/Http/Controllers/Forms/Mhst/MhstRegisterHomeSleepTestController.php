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
use Illuminate\Support\Facades\File;


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
        
        $front_card = app('App\Http\Controllers\UploadImageController')->storage_upload($request->front_card,'/app/public/forms/Mhst/MhstRegisterHomeSleepForm/FrontCard/');
        $back_card = app('App\Http\Controllers\UploadImageController')->storage_upload($request->back_card,'/app/public/forms/Mhst/MhstRegisterHomeSleepForm/BackCard/');
        $phy_script = app('App\Http\Controllers\UploadImageController')->storage_upload($request->phy_script,'/app/public/forms/Mhst/MhstRegisterHomeSleepForm/Physician/');
        $signature = app('App\Http\Controllers\SignaturePadController')->upload_signature($request->signature,'/app/public/forms/signatures/MhstRegiterHomeSleep/');
        

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
        $register_home_sleep->front_card = $front_card;
        $register_home_sleep->back_card = $back_card;
        $register_home_sleep->patient_physician = request('patient_physician');
        $register_home_sleep->physician_tel = request('physician_tel');
        $register_home_sleep->extension = request('extension');
        $register_home_sleep->phy_script = $phy_script;
        $register_home_sleep->name_patient_terms = request('name_patient_terms');
        $register_home_sleep->dob_patient_terms = request('dob_patient_terms');
        $register_home_sleep->is_patient_minor = $is_patient_minor; 
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
        //dd($register_home_sleep);
        $is_patient_minor_validated = "nullable";
        $is_card_front_update ="nullable";
        $is_card_back_update ="nullable";  
        $front_card_image_path = "";
        $back_card_image_path = "";
        $is_patient_minor = "no"; 
        $pay_via_credit_card = "nullable";
        $patient_name = "nullable"; 
        $full_name = "nullable"; 
        $signature_update = "nullable";
        $is_signature_update ="nullable";
        $is_physician_photo_updated = "nullable";
        $physician_photo_path = "";

        //dd($full_name);

        if(request('signature_updated') == "yes")
        { 
            $is_signature_update = "required";  
        }
        if(request('card_front') == "yes")
        {
            $is_card_front_update = "required"; 
        }

        if(request('card_back') == "yes")
        {
            $is_card_back_update = "required"; 
        }

        if(request('phy_script') == "yes")
        {
            $is_physician_photo_updated = "required"; 
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
                'front_card_image_upload' => $is_card_front_update,
                'back_card_image_upload' => $is_card_back_update, 
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
                'signature' => $is_signature_update,
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
                'phy_script' => $is_physician_photo_updated,
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

        if(request('front_card') == "yes")
        {
            $front_card_image_path = app('App\Http\Controllers\UploadImageController')->update_image_upload($request->front_card_image_upload,'/app/public/forms/Mhst/MhstRegisterHomeSleepForm/FrontCard/');            
            //dd('Yes: '.$front_card_image_path);
        }
        else
        {
            $front_card_image_path = $register_home_sleep->front_card;
            //dd('no: '.$front_card_image_path);
        }
        //dd($front_card_image_path);
        if(request('back_card') == "yes")
        {
            $back_card_image_path = app('App\Http\Controllers\UploadImageController')->update_image_upload($request->back_card_image_upload,'/app/public/forms/Mhst/MhstRegisterHomeSleepForm/BackCard/');
            //dd('yes: '.$back_card_image_path);
        }
        else
        {
            $back_card_image_path = $register_home_sleep->back_card;
            //dd('No: '.$back_card_image_path);
        }
        
        if(request('phy_script') == "yes")
        {
            
            $physician_photo_path = app('App\Http\Controllers\UploadImageController')->update_image_upload($request->phy_script_image_upload,'/app/public/forms/Mhst/MhstRegisterHomeSleepForm/Physician/');
            //dd($physician_photo_path);
        }
        else
        {
            $physician_photo_path = $register_home_sleep->phy_script;
        } 

        $signature = $request->signature_src;
        if(request('signature_updated') == "yes")
        { 
            $signature = app('App\Http\Controllers\SignaturePadController')->update_signature($request->signature,$signature);
        }
        else
        {
            $signature = $register_home_sleep->signature;
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
        $register_home_sleep->front_card = $front_card_image_path;
        $register_home_sleep->back_card = $back_card_image_path;
        $register_home_sleep->patient_physician = request('patient_physician');
        $register_home_sleep->physician_tel = request('physician_tel');
        $register_home_sleep->extension = request('extension');
        $register_home_sleep->phy_script = $physician_photo_path;
        $register_home_sleep->name_patient_terms = request('name_patient_terms');
        $register_home_sleep->dob_patient_terms = request('dob_patient_terms');
        $register_home_sleep->is_patient_minor = $is_patient_minor; 
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


    public function CreateZoomMeeting($id)
    { 
        $ZoomClientApi = new Client();
        $token = Str::random(60);
        $MhstRegiterHomeSleep = Mhst_register_home_sleep_tests::find($id); 
        //$host = 'mansoor.zaheer994@gmail.com';
        $host = $MhstRegiterHomeSleep->client_forms->client->email;
        $participant = $MhstRegiterHomeSleep->email; 
        $timestamp = time();   
        $start_time = date("m/d/Y h:i:s a", $timestamp); 
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z'; 
        $timezone = appointment_limits::find($MhstRegiterHomeSleep->client_forms_id);
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
                return redirect()->route('client.MhstRegisterHomeSleepTest.submissions',$MhstRegiterHomeSleep->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('MhstRegisterHomeSleepTest.submissions',$MhstRegiterHomeSleep->client_forms_id);
            } 
        }
        else
        {
            session()->flash("warning","Some thing went wrong please Create meeting again.");
            return redirect()->back();
        }
    }


}
