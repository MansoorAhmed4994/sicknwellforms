<?php

namespace App\Http\Controllers;

use App\Models\Form; 
use App\Models\Clients;
use App\Models\AvailableDoctor; 
use App\Models\Client_forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class client_formController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function __constructor()
    {
     
     $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($form_id)
    { 
        return view('client-forms.create')->with(array('form_id'=>$form_id));
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
        $form_id = request('form_id');
        
        // $clients = Clients::where('email','6@gmail.com')->first();
        // $client_forms = Client_forms::find(1);

        //dd($clients->client_forms->toArray());
        
        $this->validate($request,
        [
            'full_name' => 'required', 
            'company_name' => 'required', 
            'job_title' => 'required',
            'industry' => 'required',
            'user_name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'password' => 'required',
            'confirm_password' => 'required', 
            'available_doctors' => 'required',
            
            
            'preferred_timezone' => 'required',
            'time_before_appointment' => 'required'
        
        ]);
            
        $ZoomClientApi = new Client(); 
        //  $response = $client->post('https://sicknwell.desenador.com/api/test123', ['firstname'=> 'faizan' , 'lastname'=>'pass', 'email'=>'faizanzaheer747@gmail.com', 'pass' => '123']);
        
        $token = Str::random(60);
        // $response = $client->request('POST', 'https://sicknwell.desenador.com/api/test123', [
        // 'headers' => [
        //     'Authorization' => 'Bearer '.$token,
        //     'Accept' => 'application/json',
        //     ],
        // ]);
         
        
        $response = $ZoomClientApi->request('POST', 'https://sicknwell.desenador.com/api/test123', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
            'form_params' => [ 
                'firstname' => request('full_name'),
                'lastname'=>request('full_name'),
                'email'=>request('email'),
                'pass' => request('password')
            ],
        ]);
        

        
        $response = json_decode($response->getBody(),true);
        //dd();
        if($response['code'] == '201')
        {
            //dd();
            $client = new Clients(); 
            $client->name = request('full_name');
            $client->company_name = request('company_name');
            $client->job_title = request('job_title');
            $client->industry = request('industry');
            $client->user_name = request('user_name');
            $client->email = request('email');
            $client->password = Hash::make(request('password'));
            $client->confirm_password = Hash::make(request('confirm_password')); 
            $client->created_by = '11';
            $client->updated_by = '11';  
            $client->status = 'active'; 
            $client->save();
             
            
             
            $client_forms = $client->ClientForm()->create([
                'form_id' => $form_id,
                'status' => 'active'
            ]);
            
            
            
            
            if(request('appointment_start_date'))
            {
                $client_forms->AppointmentLimits()->create([
                    'client_forms_id' => $client_forms->id, 
                    'time_zone' => request('preferred_timezone'),
                    'start_date' => request('appointment_start_date'),
                    'end_date' => request('appointment_end_date'),
                    'status' => 'active'
                ]);
            }
            else
            {
                $client_forms->AppointmentLimits()->create([
                    'client_forms_id' => $client_forms->id, 
                    'time_zone' => request('preferred_timezone'),
                    'start_date' => null,
                    'end_date' => null,
                    'status' => 'active'
                ]);
            }
            
            
            $client_forms->AvailableDoctors()->create([
                'client_forms_id' => $client_forms->id,
                'available_doctors' => request('available_doctors'),
                'appointment_interval' => '30',
                'time_before_appointment' => request('time_before_appointment'),
                'status' => 'active'
            ]);
            
            //dd('working');
            
            $appoint_schedules = json_decode(request('hiddenappointments'),true);
            //dd($appoint_schedules);
            foreach($appoint_schedules as $appoint_schedule)
            { 
                $client_forms->AppointmentSchedule()->create([
                    'client_forms_id' => $client_forms->id,
                    'appointment_day' =>  $appoint_schedule['day'],
                    'start_time' =>  DATE("H:i", STRTOTIME($appoint_schedule['start_from'])),
                    'end_time' =>  DATE("H:i", STRTOTIME($appoint_schedule['end_at'])),
                    'status' => 'active'
                ]);
                
            }
            //dd($appoint_schedules);
            //dd($appoint_schedules);
            //dd();
            
            $email_data= array(
                'name' =>request('full_name'),  
    			'start_time' => $request->datepicker,
    			'id' => request('email'),
    			'password' => request('password'),
    			'email' => request('email'), 
                );
                
                
            $client->email = request('email');
            $client->password = Hash::make(request('password'));
                
                //dd($email_data);
            Mail::to(request('email'))->send(new WelcomeMail($email_data)); 
             
            $client_forms_id = $client_forms->id;
            
            //dd();
            session()->flash("success","Client Form has been successfully registered"); 
            $forms_details = Form::find($form_id);
            $form_name = $forms_details->form_name; 
            return view('forms.embed-link')->with(array('client_forms_id'=>$client_forms_id,'form_name'=>$form_name));   
        }
        else
        {
            //sdd('else');
            session()->flash("warning", $response['message']);
            return view('client-forms.create')->with(array('form_id'=>request('form_id')));
            
            //return view('forms.embed-link')->with(array('client_forms_id'=>$client_forms_id,'form_name'=>$form_name)); 
            //dd($response['message']); 
        }
        
        
         
        
        
        
        //return view('forms.embed-link')->with(array('client_forms_id'=>$client_forms_id)); 
        //return view('client_forms.created-successfully');
        //
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function clientFormsList(Clients $client)
    {   
            
        return view('clients.forms', [
            'client' => $client
        ]);
    } 

    // public function clientFormsList(Form $client)
    // {
    //     dd($client->clients);
    //     return view('clients.forms', [
    //         'client' => $client
    //     ]);
    // }
    
    public function FormEmbedLink($form_name,$client_forms_id)
    {  //dd();
        return view('forms.embed-link')->with(array('client_forms_id'=>$client_forms_id,'form_name'=>$form_name)); 
        
    } 

    public function FormTempletes($clien_form_id)
    { 
        return view('forms.QcmTelemedicineForm')->with(array('client_form_id'=>$clien_form_id)); 
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
