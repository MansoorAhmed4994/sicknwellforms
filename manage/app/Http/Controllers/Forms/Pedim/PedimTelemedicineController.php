<?php

namespace App\Http\Controllers\Forms\Pedim;

use App\Models\Forms\Pedim\Pedim_telemedicines;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Auth;

use Illuminate\Http\Request;

class PedimTelemedicineController extends Controller
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

    public function submissions($client_form_id)
    { 
        $submissions = Pedim_telemedicines::all()->where('client_forms_id', $client_form_id);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
        //dd($submissions);
        return view('forms.pedim.pedim-telemedicine.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
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
        //$time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first();
        $time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first();
        if($time_before_interval )
        {
            $time_before_interval=$time_before_interval->time_before_appointment;
        }
        else
        {
            $time_before_interval = '';
        }
        //dd($time_before_interval);
        $appoint_date_range = appointment_limits::all()->where('client_forms_id', $client_form_id)->first(); 
        
        //dd($appoint_date_range);
        return view('forms.pedim.pedim-telemedicine.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range)); 
        //return view('forms.pedim.pedim-telemedicine.create');
        //

        //return view('forms.pedim.pedim-telemedicine.create');
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
             
            'visit_type' => 'required',
            'description_of_issue' => 'required',
            'appointment_from' => 'required',
            'appointment_to' => 'required', 
            'appointment_date' => 'required',
            'patient_fname' => 'required',
            'patient_mname' => 'required', 
            'patient_lname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'guardian_fname' => 'required',
            'guardian_mname' => 'required', 
            'guardian_lname' => 'required',
            'dob' => 'required',
            'is_patient_minor' => 'required',
            'symptoms' => 'required',
            'insurance_telephone' => 'required', 
            'insurance_email' => 'required',
            'accept_financial_policy' => 'required',
            'fp_date' => 'required',
            'accept_consent_for_treatment' => 'required',
            'cft_date' => 'required', 
            'hear_about_us' => 'required'

            ];

            

            $this->validate($request, $valiedation_from_array);

        $pedim_telemedicines = new Pedim_telemedicines();
        $pedim_telemedicines->visit_type = $request->visit_type;
        $pedim_telemedicines->description_of_issue = $request->description_of_issue;
        $pedim_telemedicines->appointment_from = date("H:i:s", strtotime(request('appointment_from')));
        $pedim_telemedicines->appointment_to = date("H:i:s", strtotime(request('appointment_to'))); 
        $pedim_telemedicines->appointment_date = request('appointment_date');
        $pedim_telemedicines->patient_fname = $request->patient_fname;
        $pedim_telemedicines->patient_mname = $request->patient_mname;
        $pedim_telemedicines->patient_lname = $request->patient_lname;
        $pedim_telemedicines->telephone = $request->telephone;
        $pedim_telemedicines->email = $request->email;
        $pedim_telemedicines->guardian_fname = $request->guardian_fname;
        $pedim_telemedicines->guardian_mname = $request->guardian_mname;
        $pedim_telemedicines->guardian_lname = $request->guardian_lname;
        $pedim_telemedicines->dob = $request->dob;
        $pedim_telemedicines->is_patient_minor = $request->is_patient_minor;
        $pedim_telemedicines->symptoms = $request->symptoms;
        $pedim_telemedicines->responsible_party_name = $request->responsible_party_name;
        $pedim_telemedicines->insurance_subscriber = $request->insurance_subscriber;
        $pedim_telemedicines->relation_patient = $request->relation_patient;
        $pedim_telemedicines->insurance_telephone = $request->insurance_telephone;
        $pedim_telemedicines->insurance_email = $request->insurance_email;
        $pedim_telemedicines->primary_insurance_company = $request->primary_insurance_company;
        $pedim_telemedicines->secondary_insurance_company = $request->secondary_insurance_company;
        $pedim_telemedicines->accept_financial_policy = $request->accept_financial_policy;
        $pedim_telemedicines->fp_date = $request->fp_date;
        $pedim_telemedicines->accept_consent_for_treatment = $request->accept_consent_for_treatment;
        $pedim_telemedicines->cft_date = $request->cft_date;
        $pedim_telemedicines->hear_about_us = $request->hear_about_us;
        $pedim_telemedicines->client_forms_id = $request->client_forms_id; 
        $pedim_telemedicines->status ='active';
        $pedim_telemedicines->save();
        
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
    public function edit($submission_id)
    {
        //dd(Auth);
        $PedimTelemedicine = Pedim_telemedicines::find($submission_id); 
        $client_form_id = $PedimTelemedicine->client_forms_id;
        $time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first()->time_before_appointment;
        $appoint_date_range = appointment_limits::all()->where('client_forms_id', $client_form_id)->first();  
   
        return view('forms.pedim.pedim-telemedicine.edit')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range, 'PedimTelemedicine' => $PedimTelemedicine)); 
        
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedim_telemedicines $pedim_telemedicines)
    {
        //
        $valiedation_from_array = [
             
            'visit_type' => 'required',
            'description_of_issue' => 'required',
            'appointment_from' => 'required',
            'appointment_to' => 'required', 
            'appointment_date' => 'required',
            'patient_fname' => 'required',
            'patient_mname' => 'required', 
            'patient_lname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'guardian_fname' => 'required',
            'guardian_mname' => 'required', 
            'guardian_lname' => 'required',
            'dob' => 'required',
            'is_patient_minor' => 'required',
            'symptoms' => 'required',
            'insurance_telephone' => 'required', 
            'insurance_email' => 'required',
            'accept_financial_policy' => 'required',
            'fp_date' => 'required',
            'accept_consent_for_treatment' => 'required',
            'cft_date' => 'required', 
            'hear_about_us' => 'required'

            ];

            $this->validate($request, $valiedation_from_array);

        
        $pedim_telemedicines->visit_type = $request->visit_type;
        $pedim_telemedicines->description_of_issue = $request->description_of_issue;
        $pedim_telemedicines->appointment_from = date("H:i:s", strtotime(request('appointment_from')));
        $pedim_telemedicines->appointment_to = date("H:i:s", strtotime(request('appointment_to'))); 
        $pedim_telemedicines->appointment_date = request('appointment_date');
        $pedim_telemedicines->patient_fname = $request->patient_fname;
        $pedim_telemedicines->patient_mname = $request->patient_mname;
        $pedim_telemedicines->patient_lname = $request->patient_lname;
        $pedim_telemedicines->telephone = $request->telephone;
        $pedim_telemedicines->email = $request->email;
        $pedim_telemedicines->guardian_fname = $request->guardian_fname;
        $pedim_telemedicines->guardian_mname = $request->guardian_mname;
        $pedim_telemedicines->guardian_lname = $request->guardian_lname;
        $pedim_telemedicines->dob = $request->dob;
        $pedim_telemedicines->is_patient_minor = $request->is_patient_minor;
        $pedim_telemedicines->symptoms = $request->symptoms;
        $pedim_telemedicines->responsible_party_name = $request->responsible_party_name;
        $pedim_telemedicines->insurance_subscriber = $request->insurance_subscriber;
        $pedim_telemedicines->relation_patient = $request->relation_patient;
        $pedim_telemedicines->insurance_telephone = $request->insurance_telephone;
        $pedim_telemedicines->insurance_email = $request->insurance_email;
        $pedim_telemedicines->primary_insurance_company = $request->primary_insurance_company;
        $pedim_telemedicines->secondary_insurance_company = $request->secondary_insurance_company;
        $pedim_telemedicines->accept_financial_policy = $request->accept_financial_policy;
        $pedim_telemedicines->fp_date = $request->fp_date;
        $pedim_telemedicines->accept_consent_for_treatment = $request->accept_consent_for_treatment;
        $pedim_telemedicines->cft_date = $request->cft_date;
        $pedim_telemedicines->hear_about_us = $request->hear_about_us;
        $update_status=$pedim_telemedicines->save();

        if($update_status)
            {  
                if(Auth::guard('clients')->check())
                {
                    session()->flash("success","Successfully Updated"); 
                    return redirect()->route('client.PedimTelemedicine.submissions',$pedim_telemedicines->client_forms_id);
                }
                else
                {
                    session()->flash("success","Successfully Updated"); 
                    return redirect()->route('PedimTelemedicine.submissions',$pedim_telemedicines->client_forms_id);
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
        $PedimTelemedicines = pedim_telemedicines::find($id);
        $host = $PedimTelemedicines->client_forms->client->email;
        $participant = $PedimTelemedicines->email;
        //dd($InOfficeAppointmentsDetails->email);
        $start_date = $PedimTelemedicines->appointment_date;
        $start_time = $PedimTelemedicines->appointment_to;  
        $timepicker = $PedimTelemedicines->appointment_from;  
        $start_time = $start_date.' '.$timepicker;
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = (($PedimTelemedicines->duration_hour)*60)+$PedimTelemedicines->duration_minutes;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z';
        //get time zone 
        $timezone = appointment_limits::find($PedimTelemedicines->client_forms_id);
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
            return redirect()->route('client.PedimTelemedicine.submissions',$PedimTelemedicines->client_forms_id);
        }
        else
        {
            return redirect()->route('PedimTelemedicine.submissions',$PedimTelemedicines->client_forms_id);
        } 
    }
}
