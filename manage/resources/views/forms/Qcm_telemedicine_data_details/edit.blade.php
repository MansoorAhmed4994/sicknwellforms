<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> 
    <title>{{ config('app.name', 'SICKNWELL') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/noty.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/noty-bootstrap-v4.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/airdatepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/main-form.css') }}" />
    <script src="{{ asset('public/theme-resources/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('public/theme-resources/js/timepicker.js') }}"></script>
    <script>
    
    

function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
}



    </script> 
</head>
<body>
    @if(count($errors) > 0)
    <!--<div class="modal" id="errorsModal">-->
    <!--    <div class="modal-dialog">-->
    <!--      <div class="modal-content">-->
      
            <!-- Modal Header -->
    <!--        <div class="modal-header">-->
    <!--          <h4 class="modal-title">Form has the following errors</h4>-->
    <!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--        </div>-->
      
            <!-- Modal body -->
    <!--        <div class="modal-body">-->
              
    <!--        </div>-->
      
            <!-- Modal footer -->
    <!--        <div class="modal-footer">-->
    <!--          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
    <!--        </div>-->
      
    <!--      </div>-->
    <!--    </div>-->
    <!--</div>-->
      <script>$(document).ready(function(){$('#errorsModal').modal('show');})</script>
      @endif
      
      
      
    <div class="wrapper d-flex flex-column">
        <main class="flex-1 d-flex">
    <style>
    body {
            overflow-y: auto;
        } 
    </style>
    <script>
    
    </script>
    <div class="qcm-form" >
        <?php
        $start_date = "";
        $end_date = "";
        $time_zone = "";
        //echo $appoint_date_range->start_date;
        if($appoint_date_range != null)
        {
            $start_date = $appoint_date_range->start_date;
            $end_date = $appoint_date_range->end_date;
            $time_zone = $appoint_date_range->time_zone;
        } 
        
        
        // if(count($errors) > 0)
        // { 
        //     foreach($errors->all() as $error)
        //     {
        //      echo"
             
        //             <div class='alert alert-warning custom-alert'>
        //                 <strong>msg on pop</strong>$error
        //             </div>
             
        //      ";
        //     }
            
        //     foreach($errors->keys() as $error)
        //     {
                
        //      echo"
             
        //             <div class='alert alert-warning custom-alert'>
        //                 <strong>ids! </strong>$error
        //             </div>
             
        //      ";
        //     }
            
            
        // }
        
        //@include('layouts.error') 
        
        ?>
        
        
        
        
        <div>
    <form method="post" action="{{route('QcmTelemedicineForm.update',$qcmTelemedicineFormDetails->id)}}" class="position-relative">
            {{csrf_field()}}
            <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
            <input type="hidden" value="{{$time_before_interval ? $time_before_interval : ''}}" id="time_before_interval" name="time_before_interval">
            <input type="hidden" value="{{$start_date}}" id="start_date_limit" name="start_date_limit">
            <input type="hidden" value="{{$end_date}}" id="end_date_limit" name="end_date_limit">
            <input type="hidden" value="{{$time_zone}}" id="time_zone" name="time_zone">
            <div class="top-section">
                <h2>QCM - Telemedicine</h2>
                <p>Schedule your appointment.</p>
            </div>
            <div class="form-section">
                 <p>Your well being is our priority. Request your appointment below and you will be able to do a Telemedicine Consultation with a medical provider. You can use your smart telephone, tablet or desktop. If you are using a desktop system,
                    then please verify that your Camera, Speakers and Microphone are in working order.<br /><br /> We are currently accepting telemedicine appointments from 10:00 AM to 4:00 PM | Monday thru Friday. <br /><b>Confirmation Emails with exact appointment
                time is sent during regular business hours.Please be patient, while we schedule an available healthcare provider to see you.</b>
                </p>
                @if(count($errors) > 0)
                <div class="alert alert-danger my-2" style="font-size: 15px">
                    <i class="fas fa-exclamation-triangle mr-2"></i><span>Please fill the Required fields</span>
                </div>
                @endif 
                
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-6">
                                <div class="row no-gutters">
                                    <label>Patient Name <span class="required">*</span></label>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <div class="padding-wrap">
                                             
                                            <input type="text" class="form-control custom-mainforminput @if($errors->get('patient_first_name')) is-invalid @endif"
                                                name="patient_first_name" id="patient_first_name" value="@if(old('patient_first_name') != null) {{old('patient_first_name')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->patient_first_name}}  @endif "/>
                                            <p><small>First name</small></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput @if($errors->get('patient_middle_name')) is-invalid @endif"
                                                name="patient_middle_name" id="patient_middle_name" value="@if(old('patient_middle_name') != null) {{old('patient_middle_name')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->patient_middle_name}} @endif"/>
                                            <p><small>Middle name</small></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput @if($errors->get('patient_last_name')) is-invalid @endif"
                                                name="patient_last_name" id="patient_last_name" value="@if(old('patient_last_name') != null) {{old('patient_last_name')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->patient_last_name}} @endif"/>
                                            <p><small>Last name</small></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-2">
                                <label>Telephone <span class="required">*</span></label>
                                <input type="tel" class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" name="telephone"
                                    id="telephone" value="@if(old('telephone') != null) {{old('telephone')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->telephone}} @endif"  data-inputmask='"mask": "(999) 999-9999"' data-mask />
                            </div>
                            
                            <div class="col-12 col-md-2">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value="@if(old('email') != null) {{old('email')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->email}}@endif" name="email" id="email" />
                            </div>
                            
                            <div class="col-12 col-md-2">
                                <label>Employer / Occupation</label>
                                <input type="text" class="form-control custom-mainforminput @if(old('employer_occupation') != null) {{old('employer_occupation')}} @elseif($errors->get('employer_occupation')) is-invalid @endif" value="@if(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->employer_occupation}} @endif" name="employer_occupation" id="employer_occupation" />
                            </div>
                            
                        </div> 
                        <div class="row form-group">
                            <div class="col-12 col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <div class="padding-wrap">
                                            <label>Gender at Birth <span class="required">*</span></label>
                                            <select class="form-control custom-mainforminput   @if($errors->get('gender')) is-invalid @endif" name="gender" id="gender">
                                                <option value="">Select </option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="padding-wrap">
                                            <label>Date of birth <span class="required">*</span></label>
                                            <input type="text"  value="@if(old('dob') != null) {{old('dob')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->dob}} @endif" class="form-control custom-mainforminput dobpicker  @if($errors->get('dob')) is-invalid @endif"
                                                name="dob" id="dob" readonly />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="padding-wrap">
                                            <label>Is Patient a Minor?</label><br />
                                            <label class="mt-2"><input type="checkbox" class="mr-2"
                                                    name="is_patient_minor" id="is_patient_minor" value="yes" <?php if(isset($qcmTelemedicineFormDetails)){ if($qcmTelemedicineFormDetails->is_patient_minor == 'yes'){ echo 'checked';} } if(old('is_patient_minor') == 'yes'){ echo 'checked';}?>>Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 showIfMinor d-none" id="IsMinordviid">
                                <label>Parent or Guardian <span class="required">*</span></label>
                                <input type="text" class="form-control custom-mainforminput  @if($errors->get('parent_guardian')) is-invalid @endif" value="@if(old('parent_guardian') != null) {{old('parent_guardian')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->parent_guardian}} @endif " name="parent_guardian"
                                    id="parent_guardian" />
                            </div>
                            <div class="col-12 col-md-3 showIfMinor d-none" >
                                <label>Relation to Patient <span class="required">*</span></label>
                                <input type="text" class="form-control custom-mainforminput  @if($errors->get('relation_to_patient')) is-invalid @endif"  value="@if(old('relation_to_patient') != null) {{old('relation_to_patient')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->relation_to_patient}} @endif" name="relation_to_patient"
                                    id="relation_to_patient" />
                                    <p><small>Father, Mother, etc.</small></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-12">
                                <div class="row no-gutters">
                                    <label>Address <span class="required">*</span></label>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput  @if($errors->get('address1')) is-invalid @endif"
                                                name="address1"   value="@if(old('address1') != null) {{old('address1')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->address1}} @endif" id="address1" />
                                            <p><small>Street Address</small></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput  @if($errors->get('address2')) is-invalid @endif"
                                                name="address2"   value="@if(old('address2') != null) {{old('address2')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->address2}} @endif" id="address2" />
                                            <p><small>Street Address Line 2</small></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput  @if($errors->get('city')) is-invalid @endif"
                                                name="city"   value="@if(old('city') != null) {{old('city')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->city}} @endif" id="city" />
                                            <p><small>City</small></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput  @if($errors->get('state')) is-invalid @endif"
                                                name="state"   value="@if(old('state') != null) {{old('state')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->is_patient_minor}} @endif @if(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->state}} @endif" id="state" />
                                            <p><small>State</small></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput  @if($errors->get('zip_code')) is-invalid @endif"
                                                name="zip_code"   value="@if(old('zip_code') != null) {{old('zip_code')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->zip_code}} @endif" id="zip_code" />
                                            <p><small>Postal / Zip Code</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row margin-top align-items-end">
                            <div class="col-12 col-md-4">
                                <label>Qcard ID number (If Member)</label>
                                <input type="text" class="form-control custom-mainforminput  @if($errors->get('qcard_number')) is-invalid @endif"  value="@if(old('qcard_number') != null) {{old('qcard_number')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->qcard_number}} @endif" name="qcard_number"
                                    id="qcard_number" />
                            </div>
                            <div class="col-12 col-md-8">
                                <p>The Qcard program is available to be used on the same day of sign up. To get the
                                    details and become a Qcard Member <a href="" class="link-style">Click Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
            <div class="form-section">
               
                <div class="form-group row margin-top">
                    <div class="col-12 col-md-4" >
                        <label>Visit Type <span class="required">*</span></label> 
                        <select class="form-control custom-mainforminput  @if($errors->get('visit_type')) is-invalid @endif"  value="{{old('visit_type')}}" name="visit_type"  id="visit_type">
                            <option value="">  </option>
                            <option value="Covid-19 (Coronavirus) Screening"> Covid-19 (Coronavirus) Screening </option>
                            <option value="Common Cold"> Common Cold </option>
                            <option value="Flu Like Symptons"> Flu Like Symptons </option>
                            <option value="Head Lice"> Head Lice </option>
                            <option value="Laryngitis"> Laryngitis </option>
                            <option value="Headache"> Headache </option>
                            <option value="Allergies"> Allergies </option>
                            <option value="Cough"> Cough </option>
                            <option value="Ear Problems"> Ear Problems </option>
                            <option value="Fever"> Fever </option>
                            <option value="Insect Bites"> Insect Bites </option>
                            <option value="Nausea - Vomiting"> Nausea - Vomiting </option>
                            <option value="Eye Pain"> Eye Pain </option>
                            <option value="Rash"> Rash </option>
                            <option value="Sore Throat "> Sore Throat </option>
                            <option value="Urinary Issues"> Urinary Issues </option>
                        </select> 
                    </div>
                    <div class="col-12 col-md-8">
                        <label>Symptoms you are experiencing <span class="required">*</span></label>
                        <textarea class="form-control custom-mainforminput @if($errors->get('description')) is-invalid @endif" rows="5"   name="description"  id="description">@if(old('description') != null) {{old('description')}} @elseif(isset($qcmTelemedicineFormDetails)) {{$qcmTelemedicineFormDetails->description}} @endif</textarea>
                    </div>
                </div>
                <div class="form-group row margin-top">
                    <div class="col-12">
                        <h6 class="date-valset">Please select a date</h6>   
                    </div>
            <div class="col-12 col-md-4 ">
                <div class="datepicker datepicker-div @if($errors->get('appointment_from')) is-invalid-div @endif" data-language='en'></div>
            </div>
            <div class="col-12 col-md-4 ">
                <div class="slot-selection">
                    <div class="main-titlee">
                        
                      
                    </div>
                    <div class="slots-items">
                        <p class="message" style="display: none;">No Slots available.<br />Please try some other date.</p>
                    </div>
                </div>
            </div>
            <div class="d-block w-100"></div>
                    <div class="col-12 col-md-4"></div>
                    <div class="col-12 col-md-4">  
                    <select class="timezonePicker" id="timezonepicker" @if($appoint_date_range->time_zone) disabled @endif>
                            <option value="Europe/Andorra">Europe/Andorra</option>
                            <option value="Asia/Dubai">Asia/Dubai</option>
                            <option value="Asia/Kabul">Asia/Kabul</option>
                            <option value="Europe/Tirane">Europe/Tirane</option>
                            <option value="Asia/Yerevan">Asia/Yerevan</option>
                            <option value="Antarctica/Casey">Antarctica/Casey</option>
                            <option value="Antarctica/Davis">Antarctica/Davis</option>
                            <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                            <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                            <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                            <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                            <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                            <option value="Antarctica/Troll">Antarctica/Troll</option>
                            <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                            <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                            <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                            <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                            <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                            <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                            <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                            <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                            <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                            <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                            <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                            <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                            <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                            <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                            <option value="Europe/Vienna">Europe/Vienna</option>
                            <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                            <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                            <option value="Australia/Hobart">Australia/Hobart</option>
                            <option value="Australia/Currie">Australia/Currie</option>
                            <option value="Australia/Melbourne">Australia/Melbourne</option>
                            <option value="Australia/Sydney">Australia/Sydney</option>
                            <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                            <option value="Australia/Brisbane">Australia/Brisbane</option>
                            <option value="Australia/Lindeman">Australia/Lindeman</option>
                            <option value="Australia/Adelaide">Australia/Adelaide</option>
                            <option value="Australia/Darwin">Australia/Darwin</option>
                            <option value="Australia/Perth">Australia/Perth</option>
                            <option value="Australia/Eucla">Australia/Eucla</option>
                            <option value="Asia/Baku">Asia/Baku</option>
                            <option value="America/Barbados">America/Barbados</option>
                            <option value="Asia/Dhaka">Asia/Dhaka</option>
                            <option value="Europe/Brussels">Europe/Brussels</option>
                            <option value="Europe/Sofia">Europe/Sofia</option>
                            <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                            <option value="Asia/Brunei">Asia/Brunei</option>
                            <option value="America/La_Paz">America/La_Paz</option>
                            <option value="America/Noronha">America/Noronha</option>
                            <option value="America/Belem">America/Belem</option>
                            <option value="America/Fortaleza">America/Fortaleza</option>
                            <option value="America/Recife">America/Recife</option>
                            <option value="America/Araguaina">America/Araguaina</option>
                            <option value="America/Maceio">America/Maceio</option>
                            <option value="America/Bahia">America/Bahia</option>
                            <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                            <option value="America/Campo_Grande">America/Campo_Grande</option>
                            <option value="America/Cuiaba">America/Cuiaba</option>
                            <option value="America/Santarem">America/Santarem</option>
                            <option value="America/Porto_Velho">America/Porto_Velho</option>
                            <option value="America/Boa_Vista">America/Boa_Vista</option>
                            <option value="America/Manaus">America/Manaus</option>
                            <option value="America/Eirunepe">America/Eirunepe</option>
                            <option value="America/Rio_Branco">America/Rio_Branco</option>
                            <option value="America/Nassau">America/Nassau</option>
                            <option value="Asia/Thimphu">Asia/Thimphu</option>
                            <option value="Europe/Minsk">Europe/Minsk</option>
                            <option value="America/Belize">America/Belize</option>
                            <option value="America/St_Johns">America/St_Johns</option>
                            <option value="America/Halifax">America/Halifax</option>
                            <option value="America/Glace_Bay">America/Glace_Bay</option>
                            <option value="America/Moncton">America/Moncton</option>
                            <option value="America/Goose_Bay">America/Goose_Bay</option>
                            <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                            <option value="America/Toronto">America/Toronto</option>
                            <option value="America/Nipigon">America/Nipigon</option>
                            <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                            <option value="America/Iqaluit">America/Iqaluit</option>
                            <option value="America/Pangnirtung">America/Pangnirtung</option>
                            <option value="America/Atikokan">America/Atikokan</option>
                            <option value="America/Winnipeg">America/Winnipeg</option>
                            <option value="America/Rainy_River">America/Rainy_River</option>
                            <option value="America/Resolute">America/Resolute</option>
                            <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                            <option value="America/Regina">America/Regina</option>
                            <option value="America/Swift_Current">America/Swift_Current</option>
                            <option value="America/Edmonton">America/Edmonton</option>
                            <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                            <option value="America/Yellowknife">America/Yellowknife</option>
                            <option value="America/Inuvik">America/Inuvik</option>
                            <option value="America/Creston">America/Creston</option>
                            <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                            <option value="America/Fort_Nelson">America/Fort_Nelson</option>
                            <option value="America/Vancouver">America/Vancouver</option>
                            <option value="America/Whitehorse">America/Whitehorse</option>
                            <option value="America/Dawson">America/Dawson</option>
                            <option value="Indian/Cocos">Indian/Cocos</option>
                            <option value="Europe/Zurich">Europe/Zurich</option>
                            <option value="Africa/Abidjan">Africa/Abidjan</option>
                            <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                            <option value="America/Santiago">America/Santiago</option>
                            <option value="America/Punta_Arenas">America/Punta_Arenas</option>
                            <option value="Pacific/Easter">Pacific/Easter</option>
                            <option value="Asia/Shanghai">Asia/Shanghai</option>
                            <option value="Asia/Urumqi">Asia/Urumqi</option>
                            <option value="America/Bogota">America/Bogota</option>
                            <option value="America/Costa_Rica">America/Costa_Rica</option>
                            <option value="America/Havana">America/Havana</option>
                            <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                            <option value="America/Curacao">America/Curacao</option>
                            <option value="Indian/Christmas">Indian/Christmas</option>
                            <option value="Asia/Nicosia">Asia/Nicosia</option>
                            <option value="Asia/Famagusta">Asia/Famagusta</option>
                            <option value="Europe/Prague">Europe/Prague</option>
                            <option value="Europe/Berlin">Europe/Berlin</option>
                            <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                            <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                            <option value="Africa/Algiers">Africa/Algiers</option>
                            <option value="America/Guayaquil">America/Guayaquil</option>
                            <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                            <option value="Europe/Tallinn">Europe/Tallinn</option>
                            <option value="Africa/Cairo">Africa/Cairo</option>
                            <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                            <option value="Europe/Madrid">Europe/Madrid</option>
                            <option value="Africa/Ceuta">Africa/Ceuta</option>
                            <option value="Atlantic/Canary">Atlantic/Canary</option>
                            <option value="Europe/Helsinki">Europe/Helsinki</option>
                            <option value="Pacific/Fiji">Pacific/Fiji</option>
                            <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                            <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                            <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                            <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                            <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                            <option value="Europe/Paris">Europe/Paris</option>
                            <option value="Europe/London">Europe/London</option>
                            <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                            <option value="America/Cayenne">America/Cayenne</option>
                            <option value="Africa/Accra">Africa/Accra</option>
                            <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                            <option value="America/Godthab">America/Godthab</option>
                            <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                            <option value="America/Scoresbysund">America/Scoresbysund</option>
                            <option value="America/Thule">America/Thule</option>
                            <option value="Europe/Athens">Europe/Athens</option>
                            <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                            <option value="America/Guatemala">America/Guatemala</option>
                            <option value="Pacific/Guam">Pacific/Guam</option>
                            <option value="Africa/Bissau">Africa/Bissau</option>
                            <option value="America/Guyana">America/Guyana</option>
                            <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                            <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                            <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                            <option value="Europe/Budapest">Europe/Budapest</option>
                            <option value="Asia/Jakarta">Asia/Jakarta</option>
                            <option value="Asia/Pontianak">Asia/Pontianak</option>
                            <option value="Asia/Makassar">Asia/Makassar</option>
                            <option value="Asia/Jayapura">Asia/Jayapura</option>
                            <option value="Europe/Dublin">Europe/Dublin</option>
                            <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                            <option value="Asia/Kolkata">Asia/Kolkata</option>
                            <option value="Indian/Chagos">Indian/Chagos</option>
                            <option value="Asia/Baghdad">Asia/Baghdad</option>
                            <option value="Asia/Tehran">Asia/Tehran</option>
                            <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                            <option value="Europe/Rome">Europe/Rome</option>
                            <option value="America/Jamaica">America/Jamaica</option>
                            <option value="Asia/Amman">Asia/Amman</option>
                            <option value="Asia/Tokyo">Asia/Tokyo</option>
                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                            <option value="Asia/Bishkek">Asia/Bishkek</option>
                            <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                            <option value="Pacific/Enderbury">Pacific/Enderbury</option>
                            <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                            <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                            <option value="Asia/Seoul">Asia/Seoul</option>
                            <option value="Asia/Almaty">Asia/Almaty</option>
                            <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                            <option value="Asia/Qostanay">Asia/Qostanay</option>
                            <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                            <option value="Asia/Aqtau">Asia/Aqtau</option>
                            <option value="Asia/Atyrau">Asia/Atyrau</option>
                            <option value="Asia/Oral">Asia/Oral</option>
                            <option value="Asia/Beirut">Asia/Beirut</option>
                            <option value="Asia/Colombo">Asia/Colombo</option>
                            <option value="Africa/Monrovia">Africa/Monrovia</option>
                            <option value="Europe/Vilnius">Europe/Vilnius</option>
                            <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                            <option value="Europe/Riga">Europe/Riga</option>
                            <option value="Africa/Tripoli">Africa/Tripoli</option>
                            <option value="Africa/Casablanca">Africa/Casablanca</option>
                            <option value="Europe/Monaco">Europe/Monaco</option>
                            <option value="Europe/Chisinau">Europe/Chisinau</option>
                            <option value="Pacific/Majuro">Pacific/Majuro</option>
                            <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                            <option value="Asia/Yangon">Asia/Yangon</option>
                            <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                            <option value="Asia/Hovd">Asia/Hovd</option>
                            <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                            <option value="Asia/Macau">Asia/Macau</option>
                            <option value="America/Martinique">America/Martinique</option>
                            <option value="Europe/Malta">Europe/Malta</option>
                            <option value="Indian/Mauritius">Indian/Mauritius</option>
                            <option value="Indian/Maldives">Indian/Maldives</option>
                            <option value="America/Mexico_City">America/Mexico_City</option>
                            <option value="America/Cancun">America/Cancun</option>
                            <option value="America/Merida">America/Merida</option>
                            <option value="America/Monterrey">America/Monterrey</option>
                            <option value="America/Matamoros">America/Matamoros</option>
                            <option value="America/Mazatlan">America/Mazatlan</option>
                            <option value="America/Chihuahua">America/Chihuahua</option>
                            <option value="America/Ojinaga">America/Ojinaga</option>
                            <option value="America/Hermosillo">America/Hermosillo</option>
                            <option value="America/Tijuana">America/Tijuana</option>
                            <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                            <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                            <option value="Asia/Kuching">Asia/Kuching</option>
                            <option value="Africa/Maputo">Africa/Maputo</option>
                            <option value="Africa/Windhoek">Africa/Windhoek</option>
                            <option value="Pacific/Noumea">Pacific/Noumea</option>
                            <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                            <option value="Africa/Lagos">Africa/Lagos</option>
                            <option value="America/Managua">America/Managua</option>
                            <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                            <option value="Europe/Oslo">Europe/Oslo</option>
                            <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                            <option value="Pacific/Nauru">Pacific/Nauru</option>
                            <option value="Pacific/Niue">Pacific/Niue</option>
                            <option value="Pacific/Auckland">Pacific/Auckland</option>
                            <option value="Pacific/Chatham">Pacific/Chatham</option>
                            <option value="America/Panama">America/Panama</option>
                            <option value="America/Lima">America/Lima</option>
                            <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                            <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                            <option value="Pacific/Gambier">Pacific/Gambier</option>
                            <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                            <option value="Pacific/Bougainville">Pacific/Bougainville</option>
                            <option value="Asia/Manila">Asia/Manila</option>
                            <option value="Asia/Karachi">Asia/Karachi</option>
                            <option value="Europe/Warsaw">Europe/Warsaw</option>
                            <option value="America/Miquelon">America/Miquelon</option>
                            <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                            <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                            <option value="Asia/Gaza">Asia/Gaza</option>
                            <option value="Asia/Hebron">Asia/Hebron</option>
                            <option value="Europe/Lisbon">Europe/Lisbon</option>
                            <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                            <option value="Atlantic/Azores">Atlantic/Azores</option>
                            <option value="Pacific/Palau">Pacific/Palau</option>
                            <option value="America/Asuncion">America/Asuncion</option>
                            <option value="Asia/Qatar">Asia/Qatar</option>
                            <option value="Indian/Reunion">Indian/Reunion</option>
                            <option value="Europe/Bucharest">Europe/Bucharest</option>
                            <option value="Europe/Belgrade">Europe/Belgrade</option>
                            <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                            <option value="Europe/Moscow">Europe/Moscow</option>
                            <option value="Europe/Simferopol">Europe/Simferopol</option>
                            <option value="Europe/Kirov">Europe/Kirov</option>
                            <option value="Europe/Astrakhan">Europe/Astrakhan</option>
                            <option value="Europe/Volgograd">Europe/Volgograd</option>
                            <option value="Europe/Saratov">Europe/Saratov</option>
                            <option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
                            <option value="Europe/Samara">Europe/Samara</option>
                            <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                            <option value="Asia/Omsk">Asia/Omsk</option>
                            <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                            <option value="Asia/Barnaul">Asia/Barnaul</option>
                            <option value="Asia/Tomsk">Asia/Tomsk</option>
                            <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                            <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                            <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                            <option value="Asia/Chita">Asia/Chita</option>
                            <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                            <option value="Asia/Khandyga">Asia/Khandyga</option>
                            <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                            <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                            <option value="Asia/Magadan">Asia/Magadan</option>
                            <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                            <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                            <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                            <option value="Asia/Anadyr">Asia/Anadyr</option>
                            <option value="Asia/Riyadh">Asia/Riyadh</option>
                            <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                            <option value="Indian/Mahe">Indian/Mahe</option>
                            <option value="Africa/Khartoum">Africa/Khartoum</option>
                            <option value="Europe/Stockholm">Europe/Stockholm</option>
                            <option value="Asia/Singapore">Asia/Singapore</option>
                            <option value="America/Paramaribo">America/Paramaribo</option>
                            <option value="Africa/Juba">Africa/Juba</option>
                            <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                            <option value="America/El_Salvador">America/El_Salvador</option>
                            <option value="Asia/Damascus">Asia/Damascus</option>
                            <option value="America/Grand_Turk">America/Grand_Turk</option>
                            <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                            <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                            <option value="Asia/Bangkok">Asia/Bangkok</option>
                            <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                            <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                            <option value="Asia/Dili">Asia/Dili</option>
                            <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                            <option value="Africa/Tunis">Africa/Tunis</option>
                            <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                            <option value="Europe/Istanbul">Europe/Istanbul</option>
                            <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                            <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                            <option value="Asia/Taipei">Asia/Taipei</option>
                            <option value="Europe/Kiev">Europe/Kiev</option>
                            <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                            <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                            <option value="Pacific/Wake">Pacific/Wake</option>
                            <option value="America/New_York" selected>America/New_York</option>
                            <option value="America/Detroit">America/Detroit</option>
                            <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                            <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                            <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                            <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                            <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                            <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                            <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                            <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                            <option value="America/Chicago">America/Chicago</option>
                            <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                            <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                            <option value="America/Menominee">America/Menominee</option>
                            <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                            <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                            <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                            <option value="America/Denver">America/Denver</option>
                            <option value="America/Boise">America/Boise</option>
                            <option value="America/Phoenix">America/Phoenix</option>
                            <option value="America/Los_Angeles">America/Los_Angeles</option>
                            <option value="America/Anchorage">America/Anchorage</option>
                            <option value="America/Juneau">America/Juneau</option>
                            <option value="America/Sitka">America/Sitka</option>
                            <option value="America/Metlakatla">America/Metlakatla</option>
                            <option value="America/Yakutat">America/Yakutat</option>
                            <option value="America/Nome">America/Nome</option>
                            <option value="America/Adak">America/Adak</option>
                            <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                            <option value="America/Montevideo">America/Montevideo</option>
                            <option value="Asia/Samarkand">Asia/Samarkand</option>
                            <option value="Asia/Tashkent">Asia/Tashkent</option>
                            <option value="America/Caracas">America/Caracas</option>
                            <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                            <option value="Pacific/Efate">Pacific/Efate</option>
                            <option value="Pacific/Wallis">Pacific/Wallis</option>
                            <option value="Pacific/Apia">Pacific/Apia</option>
                            <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                         </select>
                    </div>
            <input type="hidden" id="date-hidden" name="appointment_date" value="@if(old('appointment_date') != null) {{old('appointment_date')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->appointment_date}}@endif"> 
            <input type="hidden" id="appointment_from-hidden"  value="@if(old('appointment_from') != null) {{old('appointment_from')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->appointment_from}}@endif" name="appointment_from">
            <input type="hidden" id="appointment_to-hidden"  value="@if(old('appointment_to') != null) {{old('appointment_to')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->appointment_to}}@endif" name="appointment_to">
        </div>
               
            </div>
            
            <div class="form-section">
                <div class="form-group row">
                    <div class="col-12">
                        <label>Choose One Payment Option <span class="required">*</span></label>
                        <div class="d-flex radio-item">
                            <div>
                                <img src="{{ asset('public/theme-resources/images/card.png')}}" />
                            </div>
                            <div class="radio-item-label @if($errors->get('payment_option')) is-invalid-radio @endif">
                                <label><input type="radio" name="payment_option" class=" @if($errors->get('patient_first_name')) is-invalid @endif" value="Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- $ 10.00" id="payment_option" <?php if(isset($qcmTelemedicineFormDetails)){ if($qcmTelemedicineFormDetails->payment_option == 'Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- $ 10.00'){ echo 'class="is-invalid" checked';}}  if(old('payment_option') == 'Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- $ 10.00'){ echo 'class="is-invalid" checked';}?>/>Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- <b></b>$ 10.00</b><br /><span class="details-radio">Available to Qcard Members (Includes coverage for Coronavirus COVID-19 Screening) | Telemedicine Link emailed once the appointment is processed. Healthcare Provider will determine and schedule testing for COVID-19 Coronavirus.</span></label>
                                <div class="form-group row margin-top align-items-center">
                                    <div class="col-12 col-md-2">
                                        <label>Select Membership</label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <select class="form-control custom-mainforminput  @if($errors->get('membership_type')) is-invalid @endif"  name="membership_type"  id="membership_type">
                                            <option value=""> Select Membership Type </option>
                                            <option value="Qcard - Established Member"> Qcard - Established Member </option>
                                            <option value="New Qcard Member - Signed up in the last 5 days and have not received membership card"> New Qcard Member - Signed up in the last 5 days and have not received membership card. </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex radio-item @if($errors->get('payment_option')) is-invalid-radio @endif">
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option" class="" value="Telemedicine Consultation for Coronavirus Screening Only -- $ 49.00" id="payment_option" <?php if(isset($qcmTelemedicineFormDetails)){ if($qcmTelemedicineFormDetails->payment_option == 'Telemedicine Consultation for Coronavirus Screening Only -- $ 49.00'){ echo 'class="is-invalid" checked';}} if(old('payment_option') == 'Telemedicine Consultation for Coronavirus Screening Only -- $ 49.00'){ echo 'class="is-invalid" checked';}?>/>Telemedicine Consultation for Coronavirus Screening Only -- <b>$ 49.00</b><br /><span class="details-radio">Available to all patients that believe that they have come into contact with an infected person, or are having symptoms. | Telemedicine Link emailed once the appointment is processed. Healthcare Provider will determine and schedule testing for COVID-19 Coronavirus.</span></label>
                            </div>
                        </div>
                        <div class="d-flex radio-item @if($errors->get('payment_option')) is-invalid-radio @endif">
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option" value="Telemedicine Consultation for Coronavirus Screening Only | Aetna, Humana, Medicaid, Medicare, Tricare -- Free" id="payment_option" <?php  if(isset($qcmTelemedicineFormDetails)){ if($qcmTelemedicineFormDetails->payment_option == 'Telemedicine Consultation for Coronavirus Screening Only -- $ 49.00'){ echo 'class="is-invalid" checked';}} if(isset($qcmTelemedicineFormDetails)){ if($qcmTelemedicineFormDetails->is_patient_minor == 'Telemedicine Consultation for Coronavirus Screening Only | Aetna, Humana, Medicaid, Medicare, Tricare -- Free'){ echo 'class="is-invalid" checked';}} if(old('payment_option') == 'Telemedicine Consultation for Coronavirus Screening Only | Aetna, Humana, Medicaid, Medicare, Tricare -- Free'){ echo 'class="is-invalid" checked';}?>/>Telemedicine Consultation for Coronavirus Screening Only | Aetna, Humana, Medicaid, Medicare, Tricare -- <b>Free</b><br /><span class="details-radio">Available to patients with Aetna, Humana, Medicaid, Medicare or Tricare that believe they have come into contact with an infected person, or are having symptoms. You will need to provide a photo of your insurance card back and front, in the next section. | Telemedicine Link emailed once the appointment is processed. Healthcare Provider will determine and schedule testing for COVID-19 Coronavirus.</span></label>
                            </div>
                        </div>
                        <div class="d-flex radio-item @if($errors->get('payment_option')) is-invalid-radio @endif" >
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option"  value="Telemedicine Consultation -- $ 90.00" id="payment_option" <?php  if(isset($qcmTelemedicineFormDetails)){ if($qcmTelemedicineFormDetails->payment_option == 'Telemedicine Consultation -- $ 90.00'){ echo 'class="is-invalid" checked';}} if(old('payment_option') == 'Telemedicine Consultation -- $ 90.00'){ echo  ' class="is-invalid" checked';}?>/>Telemedicine Consultation -- <b>$ 90.00</b><br /><span class="details-radio">Available to all patients for all visit types (iisues) - Telemedicine Link emailed once the appointment is processed.</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between total-amount">
                    <b>Total:</b>
                    <b>$ 49.00</b>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row">
                    <div class="col-12">
                        <label>Credit Card Details <span class="required">*</span></label>
                        <div class="row no-gutters">
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput @if($errors->get('cc_first_name')) is-invalid @endif" value="@if(old('patient_first_name') != null) {{old('patient_first_name')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->cc_first_name}}@endif" name="cc_first_name"  id="cc_first_name"/>
                                    <p><small>First name</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput @if($errors->get('cc_last_name')) is-invalid @endif" value="@if(old('cc_last_name') != null) {{old('cc_last_name')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->cc_last_name}}@endif" name="cc_last_name"  id="cc_last_name"/>
                                    <p><small>Last name</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput @if($errors->get('cc_number')) is-invalid @endif" value="@if(old('cc_number') != null) {{old('cc_number')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->cc_number}}@endif" name="cc_number"  id="cc_number" placeholder="**** **** **** ****" data-inputmask='"mask": "9999 9999 9999 999"' data-mask placeholder="MM / YY" />
                                    <p><small>Credit Card Number</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput @if($errors->get('cc_cvc')) is-invalid @endif" maxlength="3" value="@if(old('cc_cvc') != null) {{old('cc_cvc')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->cc_cvc}}@endif" name="cc_cvc"  id="cc_cvc" placeholder="CVC" maxlength="4" />
                                    <p><small>Security Code</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput @if($errors->get('cc_expiration')) is-invalid @endif" value="@if(old('cc_expiration') != null) {{old('cc_expiration')}} @elseif(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->cc_expiration}}@endif" name="cc_expiration"  id="cc_expiration" data-inputmask='"mask": "99 / 99"' data-mask placeholder="MM / YY" />
                                    <p><small>Card Expiration
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <p class="disclaimer">Disclaimer: Be advised that the charge processed above is for the consultation only and other charges may apply, if other services are rendered after the consultation with the medical provider, and deemed necessary for the purpose
                    of treating the condition. For Qcard members, only the $10 copay will apply and all the services covered under the program can be used, if deemed necessary by the medical provider to treat the condition.

                </p>
            </div>
            <div class="form-section last mb-5">
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Process and Continue To Patient Information" class="submitbtn" style="background: #ee1d25;" />
                </div>
            </div>
            <div class="logos-form w-100 position-absolute">
                <div class="d-flex justify-content-between align-items-end">
                    <div><img src="{{ asset('public/theme-resources/images/logo.png ')}}" /></div>
                    <div><img src="{{ asset('public/theme-resources/images/hipaa-badge.png')}}" /></div>
                </div>
            </div>
        </form>
        </div>
    </div>
 
    </main>
    </div>
    
    <script>
        var base_url = '{{ url('/') }}';
        
        
        if("@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->visit_type}}@endif)" != "")
        { 
            selectElement('visit_type', '@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->visit_type}}@endif');
        }
        else
        {
            selectElement('visit_type', '{{old('visit_type')}}');
        }
        
        if("@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->membership_type}}@endif)" != "")
        { 
            selectElement('membership_type', '@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->membership_type}}@endif');
        }
        else
        {
            selectElement('membership_type', '{{old('membership_type')}}');
        }
        
        
        
        
        if( "@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->gender}}@endif" == "Male" || "@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->gender}}@endif" == "Female")
        {
            //alert('data');
            selectElement('gender', '@if(isset($qcmTelemedicineFormDetails)){{$qcmTelemedicineFormDetails->gender}}@endif');
        }
        else
        {
           // alert('old is working');
            selectElement('gender', '{{old('gender')}}');
        }
        
        
        
        IsMinorPatientFunction();
        
        function IsMinorPatientFunction()
        {
            //alert('{{old('is_patient_minor')}}');
            var value = "{{old('is_patient_minor')}}";
            if(value == 'yes')
            {
                $('.showIfMinor').toggleClass('d-none')
            }
        }
        
         
        
    </script>

<script src="{{ asset('public/theme-resources/js/popper.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/smooth-scrollbar.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/noty.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/iframeResizer.contentWindow.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/airdatepicker.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/airdatepicker.en.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/moment.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/select2.full.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/moment-timezone-with-data.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/moment-range.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/main.js') }}"></script>

</body>

</html>


