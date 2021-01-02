<!doctype html>
<html lang="en">

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

    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/jquery.signaturepad.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/main-form.css') }}" />

    <script src="{{ asset('public/theme-resources/js/jquery-3.4.1.min.js') }}"></script>

    <script src="{{ asset('public/theme-resources/js/timepicker.js') }}"></script>


    <!--Scripts of Signatures-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <!--Scripts of Signatures-->
    <script>

        function selectElement(id, valueToSelect) {

            let element = document.getElementById(id);

            element.value = valueToSelect;

        }


    </script>


    <script>
        function selectElement(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }



    </script>
</head>

<body>


<div class="wrapper d-flex flex-column">
    <main class="flex-1 d-flex">
        <style>
            body {
                overflow-y: auto;
            }
        </style>
        <div class="qcm-form">

        
        <form method="post" action="{{route('MhstMedicalReferralForm.create',$client_form_id)}}" class="position-relative" enctype="multipart/form-data">
                {{csrf_field()}} 
                    <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
                    
                    <input type="hidden" value="mhst_medical_referral_forms" id="table_name" name="table_name">

                <div class="top-section">

                    <strong style="color: blue; font-size: 14pt" >Physician Information</strong>
                </div>
                @if(count($errors) > 0)
                <div class="alert alert-danger my-2" style="font-size: 15px">
                    <i class="fas fa-exclamation-triangle mr-2"></i><span>Please fill the Required
                        fields</span>
                </div>
                @endif

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Provider Name
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('provider_name')) is-invalid @endif" value="{{old('provider_name')}}"
                                               name="provider_name" id="provider_name"
                                            />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                        class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" value="{{old('telephone')}}"
                                               name="telephone" id="telephone" value=""
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Fax </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('fax')) is-invalid @endif" value="{{old('fax')}}"
                                               name="fax" id="fax" 
                                        />
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">
                                    <label>Emails </label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                        class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value="{{old('email')}}"
                                               name="email" id="email"
                                               />
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label>Contact Person / Referral Coordinator
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('contact_person')) is-invalid @endif" value="{{old('contact_person')}}"
                                               name="contact_person" id="contact_person"
                                               />
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="row no-gutters">

                    </div>

              <hr>


                    <div id="accordion" class="custom-accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                    New Provider to our system? Click Here
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                        <div class="form-group row mt-4">
                                            <div class="col-12 col-md-12">
                                            <div class="row no-gutters">

                                            <div class="col-12 col-md-3">
                                                <label>Facility Name</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('facility_name')) is-invalid @endif" value="{{old('facility_name')}}"
                                                           name="facility_name" id="facility_name"
                                                           />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>Address 1</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('address')) is-invalid @endif" value="{{old('address')}}"
                                                           name="address" id="address"
                                                            />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>Address 2</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('address_2')) is-invalid @endif" value="{{old('address_2')}}"
                                                           name="address_2" id="address_2"
                                                            />
                                                </div>
                                            </div>
                                            </div></div>
                                        </div>
                                        <div class="form-group row mt-4">
                                            <div class="col-12 col-md-12">
                                                <div class="row no-gutters">

                                            <div class="col-12 col-md-3">
                                                <label>City</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('city')) is-invalid @endif" value="{{old('city')}}"
                                                           name="city" id="city"
                                                            />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>State</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('state')) is-invalid @endif" value="{{old('state')}}"
                                                           name="state" id="state"
                                                           />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label>Zip</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('zip')) is-invalid @endif" value="{{old('zip')}}"
                                                           name="zip" id="zip"
                                                            />
                                                </div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

             <hr>
                    <strong style="color: blue; font-size: 14pt" >Patient Information</strong>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Patient Name
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('patient_name')) is-invalid @endif" value="{{old('patient_name')}}"
                                               name="patient_name" id="patient_name"
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <div class="padding-wrap">
                                        <label>Date of birth</label>
                                        <input type="text" value=""
                                        class="form-control custom-mainforminput dobpicker @if($errors->get('dob')) is-invalid @endif" value="{{old('dob')}}"
                                               name="dob" id="dob" readonly />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Phone Number </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                        class="form-control custom-mainforminput @if($errors->get('phone')) is-invalid @endif" value="{{old('phone')}}"
                                               name="phone" id="phone" 
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Alternate Phone
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                        class="form-control custom-mainforminput @if($errors->get('alternate_phone')) is-invalid @endif" value="{{old('alternate_phone')}}"
                                               name="alternate_phone" id="alternate_phone"
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Email</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('email_patient')) is-invalid @endif" value="{{old('email_patient')}}"
                                               name="email_patient" id="email_patient"
                                                />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>City</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('city_patient')) is-invalid @endif" value="{{old('city_patient')}}"
                                               name="city_patient" id="city_patient"
                                                />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">



                                <div class="col-12 col-md-2">
                                    <label>State</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('state_patient')) is-invalid @endif" value="{{old('state_patient')}}"
                                               name="state_patient" id="state_patient"
                                                />
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">
                                    <label>Zip</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('zip_patient')) is-invalid @endif" value="{{old('zip_patient')}}"
                                               name="zip_patient" id="zip_patient"
                                                />
                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                            <label>Address</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('address_patient')) is-invalid @endif" value="{{old('address_patient')}}"
                                       name="address_patient" id="address_patient"
                                        />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <label>Address 2</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('address_2_patient')) is-invalid @endif" value="{{old('address_2_patient')}}"
                                       name="address_2_patient" id="address_2_patient"
                                        />
                            </div>
                        </div>

                        <div class="col-12 col-md-2">
                            <label>Height</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('height')) is-invalid @endif" value="{{old('height')}}"
                                        name="height" id="height"
                                         />
                            </div>
                        </div>

                            </div></div>
                    </div>

                    
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                        
 

                        <div class="col-12 col-md-2">
                            <label>Weight</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('weight')) is-invalid @endif" value="{{old('weight')}}"
                                       name="weight" id="weight"
                                        />
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label>Neck Size</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('neck_size')) is-invalid @endif" value="{{old('neck_size')}}"
                                       name="neck_size" id="neck_size"
                                        />
                            </div>
                        </div>
 
                                <div class="col-12 col-md-3">

                                    <label>Insurance Card Front</label>
                                    <div class="padding-wrap">
                                        <input type="file"
                                        class="form-control custom-mainforminput @if($errors->get('card_front')) is-invalid @endif" value="{{old('card_front')}}"
                                               name="card_front" id="card_front"
                                                />
                                    </div>
                                </div>
 
                                <div class="col-12 col-md-3">
                                    <label>Insurance Card Back</label>
                                    <div class="padding-wrap">
                                        <input type="file"
                                        class="form-control custom-mainforminput @if($errors->get('card_back')) is-invalid @endif" value="{{old('card_back')}}"
                                               name="card_back" id="card_back"
                                                />
                                    </div>
                                </div>
                            </div></div>
                    </div>

<hr>

                <div class="form-section">
                    <strong style="color: blue; font-size: 14pt">Section A<small> - Reason for Study: Please check all that apply (minimum of TWO).</small></strong>
                </div>


                    <h3 style="color: blue; font-size: 14pt; margin-top: 10px;">Symptoms or Medical History</h3 >

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <label> Please check all that apply, including a minimum of TWO of the symptoms with an *. </label>
                        </div>
                    </div>


                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="*Hypertention" <?php if(old('symptoms') == '*Hypertention'){ echo 'checked';}?>>
                            <label> *Hypertention </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*History of Stroke" <?php if(old('symptoms') == '*History of Stroke'){ echo 'checked';}?>>
                            <label > *History of Stroke </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*Impaired Cognition" <?php if(old('symptoms') == '*Impaired Cognition'){ echo 'checked';}?>>
                            <label > *Impaired Cognition </label>
                        </div>
                    </div>
                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="*Ischemic Heart Disease" <?php if(old('symptoms') == '*Ischemic Heart Disease'){ echo 'checked';}?>>
                            <label> *Ischemic Heart Disease </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*Mood Disorders" <?php if(old('symptoms') == '*Mood Disorders'){ echo 'checked';}?>>
                            <label > *Mood Disorders </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*Excessive Daytime Sleepiness" <?php if(old('*Excessive Daytime Sleepiness') == 'Google'){ echo 'checked';}?>>
                            <label > *Excessive Daytime Sleepiness </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="*Insomnia" <?php if(old('symptoms') == '*Insomnia'){ echo 'checked';}?>>
                            <label> *Insomnia </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Atrial Fibrillation" <?php if(old('symptoms') == 'Atrial Fibrillation'){ echo 'checked';}?>>
                            <label > Atrial Fibrillation </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Reflux" <?php if(old('symptoms') == 'Reflux'){ echo 'checked';}?>>
                            <label > Reflux </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Witnessed Apnea" <?php if(old('symptoms') == 'Witnessed Apnea'){ echo 'checked';}?>>
                            <label> Witnessed Apnea </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Congestive Heart Failure" <?php if(old('symptoms') == 'Congestive Heart Failure'){ echo 'checked';}?>>
                            <label > Congestive Heart Failure </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Diabetes" <?php if(old('symptoms') == 'Diabetes'){ echo 'checked';}?>>
                            <label> Diabetes </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Memory Loss" <?php if(old('symptoms') == 'Memory Loss'){ echo 'checked';}?>>
                            <label> Memory Loss </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Depression" <?php if(old('symptoms') == 'Depression'){ echo 'checked';}?>>
                            <label > Depression </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Sleep Disturbance" <?php if(old('symptoms') == 'Sleep Disturbance'){ echo 'checked';}?>>
                            <label> Sleep Disturbance </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Seizures" <?php if(old('symptoms') == 'Seizures'){ echo 'checked';}?>>
                            <label> Seizures </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="COPD" <?php if(old('symptoms') == 'COPD'){ echo 'checked';}?>>
                            <label > COPD </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Morning Headache" <?php if(old('symptoms') == 'Morning Headache'){ echo 'checked';}?>>
                            <label> Morning Headache </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Nocturia" <?php if(old('symptoms') == 'Nocturia'){ echo 'checked';}?>>
                            <label> Nocturia </label>
                        </div>

                        <div style="display: flex;" class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Large neck size (greater than 17 for men, greater than 16 for women)." <?php if(old('symptoms') == 'Large neck size (greater than 17 for men, greater than 16 for women).'){ echo 'checked';}?>>
                            <label>&nbsp;Large neck size (greater than 17" for men, greater than 16" for women)</label>
                        </div>


                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Other" <?php if(old('symptoms') == 'Other'){ echo 'checked';}?>>
                            <label> Other </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-3">


                            <label>Is patient on Oxygen? </label><br />

                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <label class="mt-2"><input type="radio"
                                                               name="oxygen" id="oxygen" value="yes"  <?php if(old('oxygen') == 'yes'){ echo 'checked';}?>> Yes</label>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label class="mt-2"><input type="radio"
                                                               name="oxygen" id="oxygen" value="no"  <?php if(old('oxygen') == 'yes'){ echo 'checked';}?>> No</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-2">

                            <label>LPM?
                            </label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('lpm')) is-invalid @endif" value="{{old('lpm')}}"
                                       name="lpm" id="lpm"
                                       value="" />
                            </div>

                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-4">

                            <strong style="color: blue; font-size: 14pt">Section B  - Diagnostic Codes</strong>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-4">

                            <label>Please check at lease One that applies.</label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="diagnostic_codes" id="diagnostic_codes" value="G47.33 Obstructive Sleep Apnea" <?php if(old('diagnostic_codes') == 'G47.33 Obstructive Sleep Apnea'){ echo 'checked';}?>>
                            <label> G47.33&nbsp; &nbsp; &nbsp;Obstructive Sleep Apnea </label>
                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="diagnostic_codes" id="diagnostic_codes" value="G47.10 Other Hypersomnia-Excessive Daytime Somnolence" <?php if(old('diagnostic_codes') == 'G47.10 Other Hypersomnia-Excessive Daytime Somnolence'){ echo 'checked';}?>>
                            <label > G47.10&nbsp; &nbsp; &nbsp;Other Hypersomnia-Excessive Daytime Somnolence </label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-4">
                            <strong style="color: blue; font-size: 14pt"> Section C - CPT Home Sleep Testing</strong>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="sleep_testing" id="sleep_testing" value="Commercial 95800" <?php if(old('sleep_testing') == 'Commercial 95800'){ echo 'checked';}?>>
                            <label > Commercial 95800 </label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="sleep_testing" id="sleep_testing" value="Medicare G0399" <?php if(old('sleep_testing') == 'Medicare G0399'){ echo 'checked';}?>>
                            <label > Medicare G0399</label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="sleep_testing" id="sleep_testing" value="Self-Pay $169" <?php if(old('sleep_testing') == 'Self-Pay $169'){ echo 'checked';}?>>
                            <label > Self-Pay $169</label>

                        </div>
                    </div>

               <hr>




                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-10">
                            <label>Comment</label>
                            <textarea
                            class="form-control custom-mainforminput @if($errors->get('comment')) is-invalid @endif" value="{{old('comment')}}"
                                    rows="4" name="comment"
                                    id="comment">{{old('comment')}}</textarea>
                        </div>
                    </div>


                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <div class="padding-wrap">
                                <label>Referring Physician Name<span class="required">*</span> </label>
                                <input type="text" value=""
                                class="form-control custom-mainforminput @if($errors->get('physician_name')) is-invalid @endif" value="{{old('physician_name')}}"
                                       name="physician_name" id="physician_name"  />
                            </div>

                        </div>

                        <div style="margin-left: 20px;" class="col-12 col-md-4">
                            <label class="" >Signature<span class="required">*</span></label>
                            <div>
                                        <div  id="sig1"  style="width:370px !Important;height: 200px;@if($errors->get('signature')) border-color:red; @endif" ></div>  <br/>
                            </div>
                            <span id="clear1" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                            <textarea class="@if($errors->get('signature')) is-invalid @endif" value="{{old('signature')}}" id="signature64" name="signature" style="display: none">{{old('signature')}}</textarea>


                        </div>

                    </div>
               <hr>

                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Submit"
                               id="signaturebtn"
                               class="submitbtn" style="background: red;" />
                    </div>



            </form>
        </div>

    </main>
</div>
<script type="text/javascript">
    var base_url = '<?php echo e(url('/')); ?>';
    var token = "<?php echo csrf_token() ?>";

    var sig1 = $('#sig1').signature({syncField: '#signature64', syncFormat: 'PNG'});

    $('#clear1').click(function(e) {
        e.preventDefault();
        sig1.signature('clear');
        $("#signature64").val('');
    });





    $('#signaturebtn').on('click', function(e)
    {
        var signature = jQuery("#signature641").val();
        alert(signature);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url + '/signaturepad',
            data: {
                signed: signature,
            },
            type: 'POST',
            dataType: 'json',
            success: function(response)
            {
                alert('save');
            }
        });
    })

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


<script src="{{ asset('public/theme-resources/js/numeric-1.2.6.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bezier.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.signaturepad.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/json2.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/html2canvas.js') }}"></script>



</body>

</html>