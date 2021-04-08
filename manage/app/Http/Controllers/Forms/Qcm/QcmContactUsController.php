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

use App\Models\Forms\Qcm\Qcm_contact_forms;

class QcmContactUsController extends Controller
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
        return view('forms.qcm.qcm-contact-us.create')->with(array('time_before_interval'=>$time_before_interval, 'client_form_id' => $client_form_id, 'appoint_date_range' => $appoint_date_range));

        

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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required' 
        ];
        $this->validate($request, $valiedation_from_array);

        $Qcm_contact_us_Table = new Qcm_contact_forms();
        $Qcm_contact_us_Table->first_name = request('first_name');
        $Qcm_contact_us_Table->last_name = request('last_name');
        $Qcm_contact_us_Table->phone_number = request('phone_number');
        $Qcm_contact_us_Table->email = request('email');
        $Qcm_contact_us_Table->comment_box = request('comment_box');
        $Qcm_contact_us_Table->client_forms_id = request('client_forms_id');
        $Qcm_contact_us_Table->status = "active";
        $insert_status = $Qcm_contact_us_Table->save();

        if($insert_status)
        {
            session()->flash("success","Successfully Submited");  
            return redirect()->route('QcmContactUs',$Qcm_contact_us_Table->client_forms_id);
        }
        else
        {
            session()->flash("Warning","Some thing went wrong, Please try again.");  
            return redirect()->route('QcmContactUs',$Qcm_contact_us_Table->client_forms_id);
        }
    }

    

    public function submissions($client_form_id)
    { 
        //dd($client_form_id);
        $submissions = Qcm_contact_forms::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id; 
         
        return view('forms.qcm.qcm-contact-us.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
    }

    
    public function edit($submission_id)
    {
        
        //dd(Auth);
        $QcmContactForms = Qcm_contact_forms::find($submission_id); 
        $client_form_id = $QcmContactForms->client_forms_id; 
        return view('forms.qcm.qcm-contact-us.edit')->with(array('submission_id' => $submission_id,'client_form_id' => $client_form_id, 'QcmContactForms' => $QcmContactForms)); 
        
        //
    }

    public function update(Request $request, Qcm_contact_forms $Qcm_contact_us_Table)
    {
        
        $valiedation_from_array = [  
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required' 
        ];
        $this->validate($request, $valiedation_from_array); 
 
        $Qcm_contact_us_Table->first_name = request('first_name');
        $Qcm_contact_us_Table->last_name = request('last_name');
        $Qcm_contact_us_Table->phone_number = request('phone_number');
        $Qcm_contact_us_Table->email = request('email');
        $Qcm_contact_us_Table->comment_box = request('comment_box');
        $Qcm_contact_us_Table->client_forms_id = request('client_forms_id');
        $Qcm_contact_us_Table->status = "active";
        $update_status = $Qcm_contact_us_Table->save();

        if($update_status)
        {  
            if(Auth::guard('clients')->check())
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('client.QcmContactUs.submissions',$Qcm_contact_us_Table->client_forms_id);
            }
            else
            {
                session()->flash("success","Successfully Updated"); 
                return redirect()->route('QcmContactUs.submissions',$Qcm_contact_us_Table->client_forms_id);
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
        $QcmContactForms = Qcm_contact_forms::find($id); 
        //$host = 'mansoor.zaheer994@gmail.com';
        $host = $QcmContactForms->client_forms->client->email;
        $participant = $QcmContactForms->email; 
        $timestamp = time();   
        $start_time = date("m/d/Y h:i:s a", $timestamp); 
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = 30;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z'; 
        $timezone = appointment_limits::find($QcmContactForms->client_forms_id);
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
                return redirect()->route('client.QcmContactUs.submissions',$QcmContactForms->client_forms_id);
            }
            else
            {
                session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
                return redirect()->route('QcmContactUs.submissions',$QcmContactForms->client_forms_id);
            } 
        }
        else
        {
            session()->flash("warning","Some thing went wrong please Create meeting again.");
            return redirect()->back();
        }
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
