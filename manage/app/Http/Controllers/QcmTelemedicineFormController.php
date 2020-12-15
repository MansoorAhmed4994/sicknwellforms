<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Qcm_telemedicine_data_details;
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Carbon\Carbon;  
use Auth;
use DateTime;
use DB;
class QcmTelemedicineFormController extends Controller
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
        $time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first()->time_before_appointment;
        $appoint_date_range = appointment_limits::all()->where('client_forms_id', $client_form_id)->first(); 
        //dd($appoint_date_range);
        // dd($time_before_interval); 
        // return response()
        // ->view('forms.Qcm_telemedicine_data_details.QcmTelemedicineForm', compact('client_form_id'))
        // ->header('X-Frame-Options', 'AllowAll'); 
        
        return view('forms.Qcm_telemedicine_data_details.QcmTelemedicineForm')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range)); 
    } 
    
    public function GetAvailableAppointments()
    { 
        $client_forms_id = $_GET['cf_id'];
        $table_name = $_GET['table_name'];;
        //$client_forms_id = '1';
        //echo 'client_form id: '.$client_forms_id;
        $date = $_GET['date'];
        
        $date = date("Y-m-d", strtotime($date));  
        //echo $date;
        //$submissions = Qcm_telemedicine_data_details::all()->where('client_forms_id', $client_forms_id)->where('appointment_date', $date)->groupBy('appointment_from','appointment_date'); 
       
                            
        $submissions =  DB::table($table_name.' as w')
                ->select(array(DB::Raw('count(w.appointment_from) as Appointments'),DB::Raw('w.appointment_from as "Time"')))->where('client_forms_id', $client_forms_id)->where('appointment_date', $date)
                ->groupBy('appointment_from')
                ->orderBy('w.appointment_from')
                ->get();


        
        
        
        
        //dd($client_forms_id);
        $available_doctors = available_doctor::all()->where('client_forms_id', $client_forms_id);
        //dd($available_doctors);
        $appoints_data = array();
        //dd($available_doctors);
        //echo '<pre>';
        //print_r($submissions->toArray()[0]->Appointments);exit;
        //echo $submissions[0]['Appointments'];
        
        $timestamp = strtotime($date); 
        $day = date('l', $timestamp);
        //echo $client_forms_id;
        $appointment_schedule = appointment_schedule::all()->where('client_forms_id', $client_forms_id)->where('appointment_day',strtolower($day));
        //dd($appointment_schedule);
        foreach($appointment_schedule as $appointment_schedule_data)
        {
            $temp = array(
                'appointment_from' => $appointment_schedule_data->start_time,
                'appointment_to' => $appointment_schedule_data->end_time
                
            );
             //array_push($appoints_data,$appointment_schedule_data->start_time);
             array_push($appoints_data,$temp);
             
        }
        
        
         
        foreach($submissions as $data)
        {  
            $total_appointments = (int)$data->Appointments;
            $total_available_doctors  = (int)$available_doctors->first()->available_doctors; 
            //echo "$total_appointments | $total_available_doctors";
            if($total_appointments >= $total_available_doctors)
            {  
                foreach($appoints_data as $key => $appoints_datas )
                { 
                    if ($appoints_datas['appointment_from'] === $data->Time) 
                    {
                        unset($appoints_data[$key]);
                    }
                }
            } 
             
        }
        return json_encode($appoints_data); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    public function CreateZoomMeeting($id)
    {
        
        $ZoomClientApi = new Client();
        $token = Str::random(60);
        $Qcm_telemedicine_data_details = Qcm_telemedicine_data_details::find($id);
        $host = $Qcm_telemedicine_data_details->client_forms->client->email;
        $participant = $Qcm_telemedicine_data_details->email;
        //dd($Qcm_telemedicine_data_details->email);
        $start_date = $Qcm_telemedicine_data_details->appointment_date;
        
        $start_time = $Qcm_telemedicine_data_details->appointment_to;  
        $timepicker = $Qcm_telemedicine_data_details->appointment_from;  
        $start_time = $start_date.' '.$timepicker;
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = (($Qcm_telemedicine_data_details->duration_hour)*60)+$Qcm_telemedicine_data_details->duration_minutes;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z';
        //get time zone 
        $timezone = appointment_limits::find($Qcm_telemedicine_data_details->client_forms_id);
        $timezone = $timezone->time_zone;
        //dd($timezone);
        //dd($Qcm_telemedicine_data_details);
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
//         if($response['code'] == '201')
//         {
             
//             $provider_url = $response['start_url'];
//             $patient_url = $response['join_url']; 
        
        
            
//             $success_data .=  '<h1>comming soon</h1><br>';
//             $success_data .=  "<h3>Provider link: <a href='".$provider_url."'>sicknwellforms.com/provider</a></h3><br>";
//             $success_data .=  "<h3>Patient link: <a href='$patient_url'>sicknwellforms.com/patient/join/link</a></h3>";
//             $success_data = "Meeting Successfully Sheduled";
            
//             $email_data= array(
//             'name' =>$request->patient_name,
//             'message' => $provider_url, 
// 			'topic' => $request->topic,
// 			'type' => 2,
// 			'start_time' => $request->datepicker,
// 			'password' => '',
// 			'agenda' => $request->agenda,
// 			'join_url' => $patient_url,
// 			'meeting_id' => $data['id'],
//             );
            
//             //dd($email_data);
//             Mail::to($request->patient_email)->send(new WelcomeMail($email_data)); 
//             session()->flash("success",$success_data);  
            
//             //return view('success-events.meeting-created-successfully')->with('data',$email_data);
//             return redirect()->route('view-meetings');
//         }
        
        if(Auth::guard('clients')->check())
        {
            return redirect()->route('client.QcmTelemedicineForm.submissions',$Qcm_telemedicine_data_details->client_forms_id);
        }
        else
        {
            return redirect()->route('QcmTelemedicineForm.submissions',$Qcm_telemedicine_data_details->client_forms_id);
        }
       // dd($response);
    }
     
    public function store(Request $request)
    {
        $member_ship_validated = "nullable"; 
        $is_patient_minor_validated = "nullable";
        $parent_guardian_validated = "nullable";
        $relation_to_patient_validated = "nullable";
         
        $is_patient_minor = "no";
        $parent_guardian = "no";
        $relation_to_patient = "no";
        
        if(request('payment_option') == "Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- $ 10.00")
        { 
           $member_ship_validated = 'required';
        } 
        
        if(request('is_patient_minor') == "yes")
        {
            
            $is_patient_minor_validated = "required";
            $parent_guardian_validated = "required";
            $relation_to_patient_validated = "required";
            
            $is_patient_minor = request('is_patient_minor');
            $parent_guardian = request('parent_guardian');
            $relation_to_patient = request('relation_to_patient');
             
        } 
       // dd($member_ship_validated);
        $valiedation_from_array = [
             
            'is_patient_minor' => $is_patient_minor_validated,
            'parent_guardian' => $parent_guardian_validated,
            'relation_to_patient' => $relation_to_patient_validated,
            'employer_occupation' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'visit_type' => 'required',
            'description' => 'required',  
            'appointment_from' => 'required',
            'appointment_to' => 'required',  
            'appointment_date' => 'required', 
            'patient_first_name' => 'required', 
            'patient_middle_name' => 'required', 
            'patient_last_name' => 'required', 
            'telephone' => 'required', 
            'email' => 'required|email', 
            'membership_type' => $member_ship_validated,
            'qcard_number' => 'required', 
            'payment_option' => 'required',  
            'cc_first_name' => 'required', 
            'cc_last_name' => 'required',
            'cc_number' => 'required',
            'cc_cvc' => 'required',
            'cc_expiration' => 'required',
            ];

        $this->validate($request, $valiedation_from_array);

        $time_in_24_hour_format  = date("H:i", strtotime("1:30 PM"));
        $Qcm_telemedicine_data_details = new Qcm_telemedicine_data_details(); 
        $Qcm_telemedicine_data_details->visit_type = request('visit_type');
        $Qcm_telemedicine_data_details->description = request('description');
        $Qcm_telemedicine_data_details->appointment_from = date("H:i", strtotime(request('appointment_from')));
        $Qcm_telemedicine_data_details->appointment_to = date("H:i", strtotime(request('appointment_to'))); 
        $Qcm_telemedicine_data_details->appointment_date = request('appointment_date'); 
        $Qcm_telemedicine_data_details->patient_first_name = request('patient_first_name'); 
        $Qcm_telemedicine_data_details->patient_middle_name = request('patient_middle_name'); 
        $Qcm_telemedicine_data_details->patient_last_name = request('patient_last_name'); 
        $Qcm_telemedicine_data_details->telephone = request('telephone'); 
        $Qcm_telemedicine_data_details->email = request('email');  
        
         
        $Qcm_telemedicine_data_details->is_patient_minor = $is_patient_minor;
        $Qcm_telemedicine_data_details->parent_guardian = $parent_guardian;
        $Qcm_telemedicine_data_details->relation_to_patient = $relation_to_patient;
        $Qcm_telemedicine_data_details->gender = request('gender');
        $Qcm_telemedicine_data_details->dob = request('dob');
        $Qcm_telemedicine_data_details->address1 = request('address1');
        $Qcm_telemedicine_data_details->address2 = request('address2');
        $Qcm_telemedicine_data_details->city = request('city');
        $Qcm_telemedicine_data_details->state = request('state');
        $Qcm_telemedicine_data_details->zip_code = request('zip_code');
        $Qcm_telemedicine_data_details->employer_occupation = request('employer_occupation');
        
        
        
        $Qcm_telemedicine_data_details->qcard_number = request('qcard_number'); 
        $Qcm_telemedicine_data_details->payment_option = request('payment_option'); 
        
        $Qcm_telemedicine_data_details->membership_type = request('membership_type'); 
        $Qcm_telemedicine_data_details->cc_first_name = request('cc_first_name'); 
        $Qcm_telemedicine_data_details->cc_last_name = request('cc_last_name'); 
        $Qcm_telemedicine_data_details->cc_number = request('cc_number'); 
        $Qcm_telemedicine_data_details->cc_cvc = request('cc_cvc'); 
        $Qcm_telemedicine_data_details->cc_expiration = request('cc_expiration');
        $Qcm_telemedicine_data_details->client_forms_id = request('client_forms_id');  
        $Qcm_telemedicine_data_details->status = 'active'; 
        $Qcm_telemedicine_data_details->save();
        //dd(request('client_forms_id'));
        //dd();
        session()->flash("success","Successfully Submited");  
        return view('forms.status');
        //
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


    public function submissions($client_form_id)
    {
        //dd('working');
        $submissions = Qcm_telemedicine_data_details::all()->where('client_forms_id', $client_form_id);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
    //dd($submissions->first()->client_forms->client->id);
        return view('forms.Qcm_telemedicine_data_details.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_form_id)); 
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
        $qcmTelemedicineFormDetails = Qcm_telemedicine_data_details::find($submission_id);
        //dd($qcmTelemedicineFormDetails);
        $client_form_id = $qcmTelemedicineFormDetails->client_forms_id;
        $time_before_interval = available_doctor::all()->where('client_forms_id', $client_form_id)->first()->time_before_appointment;
        $appoint_date_range = appointment_limits::all()->where('client_forms_id', $client_form_id)->first(); 
        //dd($appoint_date_range);
        // dd($time_before_interval); 
        // return response()
        // ->view('forms.Qcm_telemedicine_data_details.QcmTelemedicineForm', compact('client_form_id'))
        // ->header('X-Frame-Options', 'AllowAll'); 
        //dd($qcmTelemedicineFormDetails);
        return view('forms.Qcm_telemedicine_data_details.edit')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range, 'qcmTelemedicineFormDetails' => $qcmTelemedicineFormDetails)); 
        
        //
    }
    
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qcm_telemedicine_data_details $Qcm_telemedicine_data_details)
    {
       
        //dd($request);
        $member_ship_validated = "nullable"; 
        $is_patient_minor_validated = "nullable";
        $parent_guardian_validated = "nullable";
        $relation_to_patient_validated = "nullable";
         
         
        $is_patient_minor = "no";
        $parent_guardian = "no";
        $relation_to_patient = "no";
        
        if(request('payment_option') == "Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- $ 10.00")
        { 
           $member_ship_validated = 'required';
        }
        
        
        if(request('is_patient_minor') == "yes")
        {
            
            $is_patient_minor_validated = "required";
            $parent_guardian_validated = "required";
            $relation_to_patient_validated = "required";
            
            $is_patient_minor = request('is_patient_minor');
            $parent_guardian = request('parent_guardian');
            $relation_to_patient = request('relation_to_patient');
             
        }
        
        
        
        
        
        
       // dd($member_ship_validated);
        $valiedation_from_array = [
             
            'is_patient_minor' => $is_patient_minor_validated,
            'parent_guardian' => $parent_guardian_validated,
            'relation_to_patient' => $relation_to_patient_validated,
            'employer_occupation' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'visit_type' => 'required',
            'description' => 'required',  
            'appointment_from' => 'required',
            'appointment_to' => 'required',  
            'appointment_date' => 'required', 
            'patient_first_name' => 'required', 
            'patient_middle_name' => 'required', 
            'patient_last_name' => 'required', 
            'telephone' => 'required', 
            'email' => 'required|email', 
            'membership_type' => $member_ship_validated,
            'qcard_number' => 'required', 
            'payment_option' => 'required',  
            'cc_first_name' => 'required', 
            'cc_last_name' => 'required',
            'cc_number' => 'required',
            'cc_cvc' => 'required',
            'cc_expiration' => 'required',
            
            
            ]
            ;
        
        
        
        $this->validate($request, $valiedation_from_array);
        
        
        
        //$Qcm_telemedicine_data_details = new Qcm_telemedicine_data_details(); 
        //$Qcm_telemedicine_data_details = Qcm_telemedicine_data_details::find($id);
        //dd($id);
        //dd($Qcm_telemedicine_data_details);
        $Qcm_telemedicine_data_details->visit_type = request('visit_type');
        $Qcm_telemedicine_data_details->description = request('description');
        $Qcm_telemedicine_data_details->appointment_from = date("H:i", strtotime(request('appointment_from')));
        $Qcm_telemedicine_data_details->appointment_to = date("H:i", strtotime(request('appointment_to'))); 
        $Qcm_telemedicine_data_details->appointment_date = request('appointment_date'); 
        $Qcm_telemedicine_data_details->patient_first_name = request('patient_first_name'); 
        $Qcm_telemedicine_data_details->patient_middle_name = request('patient_middle_name'); 
        $Qcm_telemedicine_data_details->patient_last_name = request('patient_last_name'); 
        $Qcm_telemedicine_data_details->telephone = request('telephone'); 
        $Qcm_telemedicine_data_details->email = request('email');  
        
         
        $Qcm_telemedicine_data_details->is_patient_minor = $is_patient_minor;
        $Qcm_telemedicine_data_details->parent_guardian = $parent_guardian;
        $Qcm_telemedicine_data_details->relation_to_patient = $relation_to_patient;
        $Qcm_telemedicine_data_details->gender = request('gender');
        $Qcm_telemedicine_data_details->dob = request('dob');
        $Qcm_telemedicine_data_details->address1 = request('address1');
        $Qcm_telemedicine_data_details->address2 = request('address2');
        $Qcm_telemedicine_data_details->city = request('city');
        $Qcm_telemedicine_data_details->state = request('state');
        $Qcm_telemedicine_data_details->zip_code = request('zip_code');
        $Qcm_telemedicine_data_details->employer_occupation = request('employer_occupation');
        
        
        
        $Qcm_telemedicine_data_details->qcard_number = request('qcard_number'); 
        $Qcm_telemedicine_data_details->payment_option = request('payment_option'); 
        
        $Qcm_telemedicine_data_details->membership_type = request('membership_type'); 
        $Qcm_telemedicine_data_details->cc_first_name = request('cc_first_name'); 
        $Qcm_telemedicine_data_details->cc_last_name = request('cc_last_name'); 
        $Qcm_telemedicine_data_details->cc_number = request('cc_number'); 
        $Qcm_telemedicine_data_details->cc_cvc = request('cc_cvc'); 
        $Qcm_telemedicine_data_details->cc_expiration = request('cc_expiration');
        $Qcm_telemedicine_data_details->client_forms_id = request('client_forms_id');  
        $Qcm_telemedicine_data_details->status = 'active'; 
        $updated_status = $Qcm_telemedicine_data_details->save();
        
        // dd($Qcm_telemedicine_data_details->save());
         
        if($updated_status)
        {
            session()->flash("success","Successfully Submited."); 
            if(Auth::guard('clients')->check())
            {
                return redirect()->route('client.QcmTelemedicineForm.submissions',$Qcm_telemedicine_data_details->client_forms_id);
            }
            else
            {
                return redirect()->route('QcmTelemedicineForm.submissions',$Qcm_telemedicine_data_details->client_forms_id);
            }
        }
        else
        {
            session()->flash("Warning","some thing went wrong."); 
            return redirect()->back();
        }
        
        // if(Auth::guard('clients'))
        // {
        //     redirect()->route('client.QcmTelemedicineForm.submissions');
        // }
        // else
        // {
            
        // }
        
        //return redirect()->route('edit-QcmTelemedicineForm',$Qcm_telemedicine_data_details->client_forms_id);
        
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
