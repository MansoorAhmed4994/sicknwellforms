<?php

namespace App\Http\Controllers\Forms\Pedim;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;    
use App\Models\In_office_appointments;
use GuzzleHttp\Client;
use Illuminate\Support\Str; 
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Auth;

class InOfficeAppointmentsController extends Controller
{
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
        //$time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first();
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
        
        //dd($appoint_date_range);
        return view('forms.in-office-appointments.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range)); 
        //return view('forms.in-office-appointments.create');
        //
    }
    
    public function CreateZoomMeeting($id)
    {
        
        $ZoomClientApi = new Client();
        $token = Str::random(60);
        $InOfficeAppointmentsDetails = In_office_appointments::find($id);
        $host = $InOfficeAppointmentsDetails->client_forms->client->email;
        $participant = $InOfficeAppointmentsDetails->email;
        //dd($InOfficeAppointmentsDetails->email);
        $start_date = $InOfficeAppointmentsDetails->appointment_date;
        
        $start_time = $InOfficeAppointmentsDetails->appointment_to;  
        $timepicker = $InOfficeAppointmentsDetails->appointment_from;  
        $start_time = $start_date.' '.$timepicker;
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = (($InOfficeAppointmentsDetails->duration_hour)*60)+$InOfficeAppointmentsDetails->duration_minutes;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z';
        //get time zone 
        $timezone = appointment_limits::find($InOfficeAppointmentsDetails->client_forms_id);
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
        session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
        
        if(Auth::guard('clients')->check())
        {
            return redirect()->route('client.InOfficeAppoints.submissions',$InOfficeAppointmentsDetails->client_forms_id);
        }
        else
        {
            return redirect()->route('InOfficeAppoints.submissions',$InOfficeAppointmentsDetails->client_forms_id);
        } 
    }


    public function submissions($client_form_id)
    { 
        $submissions = In_office_appointments::all()->where('client_forms_id', $client_form_id);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.in-office-appointments.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
        //
    }
    
    public function edit($submission_id)
    {
        //dd(Auth);
        $InOfficeAppointments = In_office_appointments::find($submission_id); 
        $client_form_id = $InOfficeAppointments->client_forms_id;
        $time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first()->time_before_appointment;
        $appoint_date_range = appointment_limits::all()->where('client_forms_id', $client_form_id)->first();  
   
        return view('forms.in-office-appointments.edit')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range, 'InOfficeAppointmentsDetails' => $InOfficeAppointments)); 
        
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
        $is_patient_minor = "no";
        $is_patient_minor_validated = "nullable";
        if(request('is_patient_minor') == "yes")
        {
        
            $is_patient_minor_validated = "required"; 
            
            $is_patient_minor = request('is_patient_minor');
        }
            
        $valiedation_from_array = [
             
            'visit_type' => 'required',
            'description' => 'required',
            'appointment_from' => 'required',
            'appointment_to' => 'required',
            'appointment_date' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'patient_fname' => 'required',
            'patient_mname' => 'required',
            'patient_lname' => 'required',  
            'dob' => 'required',
            'is_patient_minor' => $is_patient_minor_validated,  
            'symptoms' => 'required', 
            'patient_responsible_part' => 'required', 
            'patient_insurance_subscriber' => 'required', 
            'relation_patient' => 'required', 
            'patient_telephone' => 'required', 
            'patient_email' => 'required|email', 
            'patient_primary_insurance_company' => 'required',
            'patient_secondary_insurance_company' => 'required', 
            'accept_financial_policy' => 'required',  
            'fp_date' => 'required', 
            'accept_consent_for_treatment' => 'required',
            'cft_date' => 'required',
            'hear_about_us' => 'required' 
            ];

        $this->validate($request, $valiedation_from_array);
        
        
        
        $in_office_appointments = new In_office_appointments(); 
        $in_office_appointments->visit_type = request('visit_type');
        $in_office_appointments->description = request('description');
        $in_office_appointments->appointment_from = date("H:i", strtotime(request('appointment_from')));
        $in_office_appointments->appointment_to = date("H:i", strtotime(request('appointment_to'))); 
        $in_office_appointments->appointment_date = request('appointment_date'); 
        $in_office_appointments->first_name = request('first_name'); 
        $in_office_appointments->middle_name = request('middle_name'); 
        $in_office_appointments->last_name = request('last_name'); 
        $in_office_appointments->telephone = request('telephone'); 
        $in_office_appointments->email = request('email');
        $in_office_appointments->patient_fname = request('patient_fname');  
        $in_office_appointments->patient_mname = request('patient_mname');  
        $in_office_appointments->patient_lname = request('patient_lname');  
        $in_office_appointments->dob = request('dob');  
        $in_office_appointments->is_patient_minor = $is_patient_minor;  
        $in_office_appointments->symptoms = request('symptoms');  
        $in_office_appointments->patient_responsible_part = request('patient_responsible_part');  
        $in_office_appointments->patient_insurance_subscriber = request('patient_insurance_subscriber');  
        $in_office_appointments->relation_patient = request('relation_patient');  
        $in_office_appointments->patient_telephone = request('patient_telephone'); 
        $in_office_appointments->patient_email = request('patient_email');  
        $in_office_appointments->patient_primary_insurance_company = request('patient_primary_insurance_company');  
        $in_office_appointments->patient_secondary_insurance_company = request('patient_secondary_insurance_company');  
        $in_office_appointments->accept_financial_policy = request('accept_financial_policy');  
        $in_office_appointments->fp_date = request('fp_date');  
        $in_office_appointments->accept_consent_for_treatment = request('accept_consent_for_treatment');  
        $in_office_appointments->cft_date = request('cft_date');  
        $in_office_appointments->hear_about_us = request('hear_about_us');  
        $in_office_appointments->client_forms_id = request('client_forms_id');   
        $in_office_appointments->status = 'active';  
        $in_office_appointments->save();
        //dd(request('client_forms_id'));
        //dd($in_office_appointments);
        //dd();
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
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $is_patient_minor = "no";
        $is_patient_minor_validated = "nullable";
        if(request('is_patient_minor') == "yes")
        {
        
            $is_patient_minor_validated = "required"; 
            
            $is_patient_minor = request('is_patient_minor');
        }
            
        $valiedation_from_array = [
             
            'visit_type' => 'required',
            'description' => 'required',
            'appointment_from' => 'required',
            'appointment_to' => 'required',
            'appointment_date' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'patient_fname' => 'required',
            'patient_mname' => 'required',
            'patient_lname' => 'required',  
            'dob' => 'required',
            'is_patient_minor' => $is_patient_minor_validated,  
            'symptoms' => 'required', 
            'patient_responsible_part' => 'required', 
            'patient_insurance_subscriber' => 'required', 
            'relation_patient' => 'required', 
            'patient_telephone' => 'required', 
            'patient_email' => 'required|email', 
            'patient_primary_insurance_company' => 'required',
            'patient_secondary_insurance_company' => 'required', 
            'accept_financial_policy' => 'required',  
            'fp_date' => 'required', 
            'accept_consent_for_treatment' => 'required',
            'cft_date' => 'required',
            'hear_about_us' => 'required' 
            ]; 
            
        $this->validate($request, $valiedation_from_array); 
        
        $in_office_appointments = In_office_appointments::find($id);   
        $in_office_appointments->visit_type = request('visit_type');
        $in_office_appointments->description = request('description');
        $in_office_appointments->appointment_from = date("H:i", strtotime(request('appointment_from')));
        $in_office_appointments->appointment_to = date("H:i", strtotime(request('appointment_to'))); 
        $in_office_appointments->appointment_date = request('appointment_date'); 
        $in_office_appointments->first_name = request('first_name'); 
        $in_office_appointments->middle_name = request('middle_name'); 
        $in_office_appointments->last_name = request('last_name'); 
        $in_office_appointments->telephone = request('telephone'); 
        $in_office_appointments->email = request('email');
        $in_office_appointments->patient_fname = request('patient_fname');  
        $in_office_appointments->patient_mname = request('patient_mname');  
        $in_office_appointments->patient_lname = request('patient_lname');  
        $in_office_appointments->dob = request('dob');  
        $in_office_appointments->is_patient_minor = $is_patient_minor;  
        $in_office_appointments->symptoms = request('symptoms');  
        $in_office_appointments->patient_responsible_part = request('patient_responsible_part');  
        $in_office_appointments->patient_insurance_subscriber = request('patient_insurance_subscriber');  
        $in_office_appointments->relation_patient = request('relation_patient');  
        $in_office_appointments->patient_telephone = request('patient_telephone'); 
        $in_office_appointments->patient_email = request('patient_email');  
        $in_office_appointments->patient_primary_insurance_company = request('patient_primary_insurance_company');  
        $in_office_appointments->patient_secondary_insurance_company = request('patient_secondary_insurance_company');  
        $in_office_appointments->accept_financial_policy = request('accept_financial_policy');  
        $in_office_appointments->fp_date = request('fp_date');  
        $in_office_appointments->accept_consent_for_treatment = request('accept_consent_for_treatment');  
        $in_office_appointments->cft_date = request('cft_date');  
        $in_office_appointments->hear_about_us = request('hear_about_us');  
        $in_office_appointments->client_forms_id = request('client_forms_id');   
        $in_office_appointments->status = 'active';  
        $in_office_appointments->save();
        //dd(request('client_forms_id'));
        //dd($in_office_appointments);
        //dd();
        
        session()->flash("success","Successfully Updated"); 
        if(Auth::guard('clients')->check())
        {
            return redirect()->route('client.InOfficeAppointments.submissions',$in_office_appointments->client_forms_id);
        }
        else
        {
            return redirect()->route('InOfficeAppointments.submissions',$in_office_appointments->client_forms_id);
        }
        //session()->flash("success","Successfully Updated");  
        //return view('forms.status');
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
