<?php

namespace App\Http\Controllers\Forms\Qcm;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Client;     
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;
use Auth;

use App\Models\Forms\Qcm\qcm_occupational_health_safe_worker_programs;

class QcmOccupationAlHealthSafeWorkerProgramController extends Controller
{
    //
    
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
        return view('forms.qcm.qcm-occupation-al-health-worker-safe-program.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range));

         
    }

    public function store(Request $request)
    {
       
        $valiedation_from_array = [  
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'company_name' => 'required'
        ];
        $this->validate($request, $valiedation_from_array);

        $Qcm_occupational_health_safe_worker_programs = new qcm_occupational_health_safe_worker_programs();
        $Qcm_occupational_health_safe_worker_programs->first_name = request('first_name');
        $Qcm_occupational_health_safe_worker_programs->last_name = request('last_name');
        $Qcm_occupational_health_safe_worker_programs->email = request('email');
        $Qcm_occupational_health_safe_worker_programs->telephone = request('telephone');
        $Qcm_occupational_health_safe_worker_programs->company_name = request('company_name');
        $Qcm_occupational_health_safe_worker_programs->message = request('message');
        $Qcm_occupational_health_safe_worker_programs->client_forms_id = request('client_forms_id');
        $Qcm_occupational_health_safe_worker_programs->status = "active";
        $insert_status = $Qcm_occupational_health_safe_worker_programs->save();

        if($insert_status)
        {
            session()->flash("success","Successfully Submited");  
            return redirect()->route('QcmOccupationAlHealthSafeWorkerProgram',$Qcm_occupational_health_safe_worker_programs->client_forms_id);
        }
        else
        {
            session()->flash("Warning","Some thing went wrong, Please try again.");  
            return redirect()->route('QcmOccupationAlHealthSafeWorkerProgram',$Qcm_occupational_health_safe_worker_programs->client_forms_id);
        }

    }      

    public function submissions($client_form_id)
    { 
        //dd($client_form_id);
        $submissions = qcm_occupational_health_safe_worker_programs::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.qcm.qcm-occupation-al-health-worker-safe-program.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
    }

    
    public function edit($submission_id)
    {
        
        //dd(Auth);
        $QcmOccupationAlHealthSafeWorkerProgram = qcm_occupational_health_safe_worker_programs::find($submission_id); 
        $client_form_id = $QcmOccupationAlHealthSafeWorkerProgram->client_forms_id; 
        return view('forms.qcm.qcm-occupation-al-health-worker-safe-program.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'QcmOccupationAlHealthSafeWorkerProgram' => $QcmOccupationAlHealthSafeWorkerProgram)); 
        
        //
    }

    public function update(Request $request, Qcm_occupational_health_safe_worker_programs $Qcm_OHSWP_table)
    {
       
        $valiedation_from_array = [  
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'company_name' => 'required'
        ];
        $this->validate($request, $valiedation_from_array);
        //dd($Qcm_OHSWP_table);
        $Qcm_OHSWP_table->first_name = request('first_name');
        $Qcm_OHSWP_table->last_name = request('last_name');
        $Qcm_OHSWP_table->email = request('email');
        $Qcm_OHSWP_table->telephone = request('telephone');
        $Qcm_OHSWP_table->company_name = request('company_name');
        $Qcm_OHSWP_table->message = request('message');
        $Qcm_OHSWP_table->client_forms_id = request('client_forms_id');
        $Qcm_OHSWP_table->status = "active";
        $update_status = $Qcm_OHSWP_table->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.QcmOccupationAlHealthSafeWorkerProgram.submissions',$Qcm_OHSWP_table->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('QcmOccupationAlHealthSafeWorkerProgram.submissions',$Qcm_OHSWP_table->client_forms_id);
            }

        }
        else
        {
            session()->flash("warning","Some thing went wrong, please Update again"); 
            return redirect()->back();
        }

    }

    


    public function CreateZoomMeeting($id)
    { 
        $ZoomClientApi = new Client();
        $token = Str::random(60);
        $QcmOccupationAlHealthSafeWorkerProgram = Qcm_occupational_health_safe_worker_programs::find($id); 
        //$host = 'mansoor.zaheer994@gmail.com';
        $host = $QcmOccupationAlHealthSafeWorkerProgram->client_forms->client->email;
        $participant = $QcmOccupationAlHealthSafeWorkerProgram->email; 
        $timestamp = time();   
        $start_time = date("m/d/Y h:i:s a", $timestamp); 
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z'; 
        $timezone = appointment_limits::find($QcmOccupationAlHealthSafeWorkerProgram->client_forms_id);
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
                return redirect()->route('client.QcmOccupationAlHealthSafeWorkerProgram.submissions',$QcmOccupationAlHealthSafeWorkerProgram->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('QcmOccupationAlHealthSafeWorkerProgram.submissions',$QcmOccupationAlHealthSafeWorkerProgram->client_forms_id);
            } 
        }
        else
        {
            session()->flash("warning","Some thing went wrong please Create meeting again.");
            return redirect()->back();
        }
    }
}
