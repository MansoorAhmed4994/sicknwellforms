@extends((Auth::guard('clients')->check()) ? 'client.layouts.app' : 'layouts.app');

@section('content')

   
 <center> 

        
        <div class='alert alert-success custom-alert'>
            <strong>Embed Link! </strong>&lt;script type="text/javascript" src="{{route('jsforms',[$form_name,$client_forms_id])}}"&gt;&lt;/script&gt;<br>
        </div> 
 
        
        
        <h3>OR Click on the link to see the demo</h3>
        
        <h4>
            <a target="_blank" style="text-decoration: underline;color: blue;" href="{{route($form_name,$client_forms_id)}}">{{route($form_name,$client_forms_id)}}</a>
        </h4>
    </center>

@endsection


