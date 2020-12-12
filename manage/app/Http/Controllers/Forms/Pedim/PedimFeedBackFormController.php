<?php

namespace App\Http\Controllers\Forms\Pedim;


use App\Http\Controllers\Controller;
use App\Models\Forms\Pedim\pedim_feed_backs;
use Illuminate\Http\Request;
use App\Models\Client_forms;
use GuzzleHttp\Client;
use Illuminate\Support\Str; 
use App\Models\appointment_limits; 
use Auth;

class PedimFeedBackFormController extends Controller
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

        return view('forms.pedim.pedim-feed-back-form.create')->with(array('client_form_id' => $client_form_id));
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
        $valiedation_from_array = [
             
            'patient_name' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'number' => 'required',
            'patient_email' => 'required',
            'contact_managment' => 'required',
            'description' => 'required',
            'answer' => 'required',
            'client_forms_id' => 'required'
            ];

            $this->validate($request, $valiedation_from_array);

            $SubmitStatus = pedim_feed_backs::create([
                'patient_name' => $request->patient_name,
                'appointment_date' => $request->appointment_date,
                'appointment_time' => $request->appointment_time,
                'number' => $request->number,
                'patient_email' => $request->patient_email,
                'contact_managment' => $request->contact_managment,
                'description' => $request->description,
                'answer' => $request->answer,
                'client_forms_id' => $request->client_forms_id,
                'status' => 'active'
            ]);
            
            if($SubmitStatus)
            {
                session()->flash("success","Successfully Submited");  
                return redirect()->route('PedimFeedBackForm',$request->client_forms_id);
            }
            else
            {
                session()->flash("warning","Some thing went Wrong, Try it again");  
                return redirect()->route('PedimFeedBackForm',$request->client_forms_id);
            }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($submission_id)
    {
        //dd(Auth);
        $PedimFeedBack = pedim_feed_backs::find($submission_id); 
        $client_form_id = $PedimFeedBack->client_forms_id; 
        return view('forms.pedim.pedim-feed-back-form.edit')->with(array('client_form_id' => $client_form_id, 'PedimFeedBack' => $PedimFeedBack)); 
        
        //
    }

 
    public function submissions($client_form_id)
    { 
        $submissions = pedim_feed_backs::all()->where('client_forms_id', $client_form_id);
        //dd($submissions);
        $client_id = Client_forms::all()->where('id', $client_form_id)->first()->clients_id;  
        return view('forms.pedim.pedim-feed-back-form.submissions')->with(array('submissions'=>$submissions,'client_id'=>$client_id)); 
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedim_feed_backs $pedim_feed_backs)
    {
        //dd($pedim_feed_backs);
        $valiedation_from_array = [
             
            'patient_name' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'number' => 'required',
            'patient_email' => 'required',
            'contact_managment' => 'required',
            'description' => 'required',
            'answer' => 'required'
            ];

            $this->validate($request, $valiedation_from_array);

            $pedim_feed_backs->patient_name = $request->patient_name;
            $pedim_feed_backs->appointment_date = $request->appointment_date;
            $pedim_feed_backs->appointment_time = $request->appointment_time;
            $pedim_feed_backs->number = $request->number;
            $pedim_feed_backs->patient_email = $request->patient_email;
            $pedim_feed_backs->contact_managment = $request->contact_managment;
            $pedim_feed_backs->description = $request->description;
            $pedim_feed_backs->answer = $request->answer; 
            $update_status = $pedim_feed_backs->save();

            //dd($id);
            if($update_status)
            {  
                if(Auth::guard('clients')->check())
                {
                    session()->flash("success","Successfully Updated"); 
                    return redirect()->route('client.PedimFeedBackForm.submissions',$pedim_feed_backs->client_forms_id);
                }
                else
                {
                    session()->flash("success","Successfully Updated"); 
                    return redirect()->route('PedimFeedBackForm.submissions',$pedim_feed_backs->client_forms_id);
                }

            }
            else
            {
                session()->flash("warning","Some thing went wrong, please Update again"); 
                return redirect()->back();

            }

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
    
    public function CreateZoomMeeting($id)
    {
        
        $ZoomClientApi = new Client();
        $token = Str::random(60); 
        $PedimFeedBacks = pedim_feed_backs::find($id);
        $host = $PedimFeedBacks->client_forms->client->email;
        //$host = 'mansoor.zaheer994@gmail.com';
        $participant = $PedimFeedBacks->patient_email;
        //dd($InOfficeAppointmentsDetails->email);
        $start_date = $PedimFeedBacks->appointment_date; 
        $timepicker = $PedimFeedBacks->appointment_time;  
        $start_time = $start_date.' '.$timepicker;
        $start_time = date('m/d/Y h:i:s a', strtotime($start_time)); 
        $duration = (($PedimFeedBacks->duration_hour)*60)+$PedimFeedBacks->duration_minutes;
        $timestamp = strtotime($start_time);
        $start_time = date('yy-m-d\TH:m:s',$timestamp);
        $start_time = (string)$start_time.'z';
        //get time zone 
        $timezone = appointment_limits::find($PedimFeedBacks->client_forms_id);
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
        dd($response);
        session()->flash("success","Meeting Created Successfully Kindly Login In To Your Zoom Account"); 
        
        if(Auth::guard('clients')->check())
        {
            return redirect()->route('client.PedimFeedBackForm.submissions',$PedimFeedBacks->client_forms_id);
        }
        else
        {
            return redirect()->route('PedimFeedBackForm.submissions',$InOfficeAppointmentsDetails->client_forms_id);
        } 
    }
}
