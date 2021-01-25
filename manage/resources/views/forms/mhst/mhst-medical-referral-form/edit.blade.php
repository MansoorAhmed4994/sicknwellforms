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

        
        <form method="post" action="{{route('MhstMedicalReferralForm.update',$submission_id)}}" enctype="multipart/form-data" class="position-relative">
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
                                        class="form-control custom-mainforminput @if($errors->get('provider_name')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->provider_name}} @else{{old('provider_name')}}  @endif"
                                               name="provider_name" id="provider_name"
                                            />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                        class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->telephone}} @else{{old('telephone')}}  @endif"
                                               name="telephone" id="telephone" value=""
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Fax </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('fax')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->fax}} @else{{old('fax')}}  @endif"
                                               name="fax" id="fax" 
                                        />
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">
                                    <label>Emails </label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                        class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->email}} @else{{old('email')}}  @endif"
                                               name="email" id="email"
                                               />
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label>Contact Person / Referral Coordinator
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('contact_person')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->contact_person}} @else{{old('contact_person')}}  @endif"
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
                                                    class="form-control custom-mainforminput @if($errors->get('facility_name')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->facility_name}} @else{{old('facility_name')}}  @endif"
                                                           name="facility_name" id="facility_name"
                                                           />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>Address 1</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('address')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->address}} @else{{old('address')}}  @endif"
                                                           name="address" id="address"
                                                            />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>Address 2</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('address_2')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->address_2}} @else{{old('address_2')}}  @endif"
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
                                                    class="form-control custom-mainforminput @if($errors->get('city')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->city}} @else{{old('city')}}  @endif"
                                                           name="city" id="city"
                                                            />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>State</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('state')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->state}} @else{{old('state')}}  @endif"
                                                           name="state" id="state"
                                                           />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label>Zip</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                    class="form-control custom-mainforminput @if($errors->get('zip')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->zip}} @else{{old('zip')}}  @endif"
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
                                        class="form-control custom-mainforminput @if($errors->get('patient_name')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->patient_name}} @else{{old('patient_name')}}  @endif"
                                               name="patient_name" id="patient_name"
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <div class="padding-wrap">
                                        <label>Date of birth</label>
                                        <input type="text"
                                        class="form-control custom-mainforminput dobpicker @if($errors->get('dob')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->dob}} @else{{old('dob') }}  @endif" name="dob" id="dob" readonly /> 
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Phone Number </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                        class="form-control custom-mainforminput @if($errors->get('phone')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->phone}} @else{{old('phone')}}  @endif"
                                               name="phone" id="phone" 
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Alternate Phone
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                        class="form-control custom-mainforminput @if($errors->get('alternate_phone')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->alternate_phone}} @else{{old('alternate_phone')}}  @endif"
                                               name="alternate_phone" id="alternate_phone"
                                                />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Email</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('email_patient')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->email_patient}} @else{{old('email_patient')}}  @endif"
                                               name="email_patient" id="email_patient"
                                                />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>City</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('city_patient')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->city_patient}} @else{{old('city_patient')}}  @endif"
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
                                        class="form-control custom-mainforminput @if($errors->get('state_patient')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->state_patient}} @else{{old('state_patient')}}  @endif"
                                               name="state_patient" id="state_patient"
                                                />
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">
                                    <label>Zip</label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                        class="form-control custom-mainforminput @if($errors->get('zip_patient')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->zip_patient}} @else{{old('zip_patient')}}  @endif"
                                               name="zip_patient" id="zip_patient"
                                                />
                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                            <label>Address</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('address_patient')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->address_patient}} @else{{old('address_patient')}}  @endif"
                                       name="address_patient" id="address_patient"
                                        />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <label>Address 2</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('address_2_patient')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->address_2_patient}} @else{{old('address_2_patient')}}  @endif"
                                       name="address_2_patient" id="address_2_patient"
                                        />
                            </div>
                        </div>

                        <div class="col-12 col-md-2">
                            <label>Height</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('height')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->height}} @else{{old('height')}}  @endif"
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
                                class="form-control custom-mainforminput @if($errors->get('weight')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->weight}} @else{{old('weight')}}  @endif"
                                       name="weight" id="weight"
                                        />
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label>Neck Size</label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('neck_size')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->neck_size}} @else{{old('neck_size')}}  @endif"
                                       name="neck_size" id="neck_size"
                                        />
                            </div>
                        </div>
 
                                <div class="col-12 col-md-3" style="margin-right: 10px;">

                                    <label>Insurance Card Front</label> 
                                    <!-- <input type="hidden" class="form-control custom-mainforminput @if($errors->get('card_front')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->card_front}} @else{{old('card_front')}}  @endif" name="card_front" id="card_front"  />
                                      -->
                                    <input type="hidden" class="form-control custom-mainforminput @if($errors->get('card_front')) is-invalid @endif" value="no" name="card_front" id="card_front"  />
                                    
                                    <div class="card" style="width: 18rem;">
                                        <input type="file" id="front_card_image_upload" class="form-control custom-mainforminput @if($errors->get('card_front')) is-invalid @endif" style="display:none" name="front_card_image_upload"   />
                                        <img class="card-img-top" id="front_card_image" src="{{asset('manage/storage/'.$MhstMedicalReferralForm->card_front)}}" alt="Card image cap">
                                        <div class="card-body"> 
                                            <button type="button" id="cancel_front_card" class="btn btn-danger">cancel</button>
                                            <button type="button" id="edit_front_card" class="btn btn-warning">edit</button>
                                        </div>
                                    </div> 
                                </div>
 
                                <div class="col-12 col-md-3">
                                    <label>Insurance Card Back</label>                                     
                                    <!-- <input type="hidden"  class="form-control custom-mainforminput @if($errors->get('card_back')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->card_back}} @else{{old('card_back')}}  @endif" name="card_back" id="card_back" /> -->
                                    <input type="hidden"  class="form-control custom-mainforminput @if($errors->get('card_back')) is-invalid @endif" value="no" name="card_back" id="card_back" />
                                    <div class="card" style="width: 18rem;">
                                    <input type="file" id="back_card_image_upload" class="form-control custom-mainforminput @if($errors->get('back_card_image_upload')) is-invalid @endif" style="display:none" name="back_card_image_upload"  />
                                    
                                        <img class="card-img-top" id="back_card_image" src="{{asset('manage/storage/'.$MhstMedicalReferralForm->card_back)}}" alt="Card image cap">
                                        <div class="card-body"> 
                                            <button type="button" id="cancel_back_card" class="btn btn-danger">cancel</button>
                                            <button type="button" id="edit_back_card" class="btn btn-warning">edit</button>
                                        </div>
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

                            <input type="checkbox" name="symptoms" id="symptoms" value="*Hypertention" <?php if(old('symptoms') == '*Hypertention'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*Hypertention'){echo 'checked';}?>>
                            <label> *Hypertention </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*History of Stroke" <?php if(old('symptoms') == '*History of Stroke'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*History of Stroke'){echo 'checked';}?>>
                            <label > *History of Stroke </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*Impaired Cognition" <?php if(old('symptoms') == '*Impaired Cognition'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*Impaired Cognition'){echo 'checked';}?>>
                            <label > *Impaired Cognition </label>
                        </div>
                    </div>
                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="*Ischemic Heart Disease" <?php if(old('symptoms') == '*Ischemic Heart Disease'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*Ischemic Heart Disease'){echo 'checked';}?>>
                            <label> *Ischemic Heart Disease </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*Mood Disorders" <?php if(old('symptoms') == '*Mood Disorders'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*Mood Disorders'){echo 'checked';}?>>
                            <label > *Mood Disorders </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="*Excessive Daytime Sleepiness" <?php if(old('*Excessive Daytime Sleepiness') == 'Google'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*Excessive Daytime Sleepiness'){echo 'checked';}?>>
                            <label > *Excessive Daytime Sleepiness </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="*Insomnia" <?php if(old('symptoms') == '*Insomnia'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == '*Insomnia'){echo 'checked';}?>>
                            <label> *Insomnia </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Atrial Fibrillation" <?php if(old('symptoms') == 'Atrial Fibrillation'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Atrial Fibrillation'){echo 'checked';}?>>
                            <label > Atrial Fibrillation </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Reflux" <?php if(old('symptoms') == 'Reflux'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Reflux'){echo 'checked';}?>>
                            <label > Reflux </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Witnessed Apnea" <?php if(old('symptoms') == 'Witnessed Apnea'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Witnessed Apnea'){echo 'checked';}?>>
                            <label> Witnessed Apnea </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Congestive Heart Failure" <?php if(old('symptoms') == 'Congestive Heart Failure'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Congestive Heart Failure'){echo 'checked';}?>>
                            <label > Congestive Heart Failure </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Diabetes" <?php if(old('symptoms') == 'Diabetes'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Diabetes'){echo 'checked';}?>>
                            <label> Diabetes </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Memory Loss" <?php if(old('symptoms') == 'Memory Loss'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Memory Loss'){echo 'checked';}?>>
                            <label> Memory Loss </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Depression" <?php if(old('symptoms') == 'Depression'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Depression'){echo 'checked';}?>>
                            <label > Depression </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Sleep Disturbance" <?php if(old('symptoms') == 'Sleep Disturbance'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Sleep Disturbance'){echo 'checked';}?>>
                            <label> Sleep Disturbance </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Seizures" <?php if(old('symptoms') == 'Seizures'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Seizures'){echo 'checked';}?>>
                            <label> Seizures </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="COPD" <?php if(old('symptoms') == 'COPD'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'COPD'){echo 'checked';}?>>
                            <label > COPD </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Morning Headache" <?php if(old('symptoms') == 'Morning Headache'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Morning Headache'){echo 'checked';}?>>
                            <label> Morning Headache </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" name="symptoms" id="symptoms" value="Nocturia" <?php if(old('symptoms') == 'Nocturia'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Nocturia'){echo 'checked';}?>>
                            <label> Nocturia </label>
                        </div>

                        <div style="display: flex;" class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Large neck size (greater than 17 for men, greater than 16 for women)." <?php if(old('symptoms') == 'Large neck size (greater than 17 for men, greater than 16 for women).'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Large neck size (greater than 17 for men, greater than 16 for women).'){echo 'checked';}?>>
                            <label>&nbsp;Large neck size (greater than 17" for men, greater than 16" for women)</label>
                        </div>


                        <div class="col-12 col-md-3">
                            <input type="checkbox" name="symptoms" id="symptoms" value="Other" <?php if(old('symptoms') == 'Other'){ echo 'checked';} elseif($MhstMedicalReferralForm->symptoms == 'Other'){echo 'checked';}?>>
                            <label> Other </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-3">


                            <label>Is patient on Oxygen? </label><br />

                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <label class="mt-2"><input type="radio"
                                                               name="oxygen" id="oxygen" value="yes"  <?php if(old('oxygen') == 'yes'){ echo 'checked';} elseif($MhstMedicalReferralForm->oxygen == 'yes'){echo 'checked';}?>> Yes</label>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label class="mt-2"><input type="radio"
                                                               name="oxygen" id="oxygen" value="no"  <?php if(old('oxygen') == 'yes'){ echo 'checked';} elseif($MhstMedicalReferralForm->oxygen == 'no'){echo 'checked';}?>> No</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-2">

                            <label>LPM?
                            </label>
                            <div class="padding-wrap">
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('lpm')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->lpm}} @else{{old('lpm')}}  @endif"
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

                            <input type="checkbox" name="diagnostic_codes" id="diagnostic_codes" value="G47.33 Obstructive Sleep Apnea" <?php if(old('diagnostic_codes') == 'G47.33 Obstructive Sleep Apnea'){ echo 'checked';} elseif($MhstMedicalReferralForm->diagnostic_codes == 'G47.33 Obstructive Sleep Apnea'){echo 'checked';}?>>
                            <label> G47.33&nbsp; &nbsp; &nbsp;Obstructive Sleep Apnea </label>
                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="diagnostic_codes" id="diagnostic_codes" value="G47.10 Other Hypersomnia-Excessive Daytime Somnolence" <?php if(old('diagnostic_codes') == 'G47.10 Other Hypersomnia-Excessive Daytime Somnolence'){ echo 'checked';} elseif($MhstMedicalReferralForm->diagnostic_codes == 'G47.10 Other Hypersomnia-Excessive Daytime Somnolence'){echo 'checked';}?>>
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

                            <input type="checkbox" name="sleep_testing" id="sleep_testing" value="Commercial 95800" <?php if(old('sleep_testing') == 'Commercial 95800'){ echo 'checked';} elseif($MhstMedicalReferralForm->sleep_testing == 'Commercial 95800'){echo 'checked';}?>>
                            <label > Commercial 95800 </label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="sleep_testing" id="sleep_testing" value="Medicare G0399" <?php if(old('sleep_testing') == 'Medicare G0399'){ echo 'checked';}  elseif($MhstMedicalReferralForm->sleep_testing == 'Medicare G0399'){echo 'checked';}?>>
                            <label > Medicare G0399</label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" name="sleep_testing" id="sleep_testing" value="Self-Pay $169" <?php if(old('sleep_testing') == 'Self-Pay $169'){ echo 'checked';}  elseif($MhstMedicalReferralForm->sleep_testing == 'Self-Pay $169'){echo 'checked';}?>>
                            <label > Self-Pay $169</label>

                        </div>
                    </div>

               <hr>




                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-10">
                            <label>Comment</label>
                            <textarea
                            class="form-control custom-mainforminput @if($errors->get('comment')) is-invalid @endif" 
                                    rows="4" name="comment"
                                    id="comment">@if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->comment}} @else{{old('comment')}}  @endif</textarea>
                        </div>
                    </div>


                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <div class="padding-wrap">
                                <label>Referring Physician Name<span class="required">*</span> </label>
                                <input type="text"
                                class="form-control custom-mainforminput @if($errors->get('physician_name')) is-invalid @endif" value=" @if(isset($MhstMedicalReferralForm)) {{$MhstMedicalReferralForm->physician_name}} @else{{old('physician_name')}}  @endif"
                                       name="physician_name" id="physician_name"  />
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-12">


                        <div style="display:none!important" class="col-12 col-md-4" id="signature_pad"  >
                                    <input type="hidden" id="signature_updated" name="signature_updated" value="no">   
                                    <input type="hidden" id="signature_src"  name="signature_src" value="{{$MhstMedicalReferralForm->signature}}"> 
                                    <label class="" for="">Signature</label>
                                    <div>
                                        <div  id="sig1"  style="margin-bottom: 10px;width:370px !Important;height: 200px;@if($errors->get('signature')) border-color:red; @endif" class=""></div>  <br/>

                                    </div>

                                    <span id="clear1" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea class="" id="signature64" name="signature" style="display: none">{{old('signature')}}</textarea>

                        </div>

                        <div class="col-12 col-md-4 signature_pad_image" id="signature_image">

                            <img src="{{asset('manage/storage/'.$MhstMedicalReferralForm->signature)}}">
                        </div>

                    </div>

                    <div class="row no-gutters">
                        <div style="margin-left: 30px;" class="col-12  col-md-4">
                            <button type="button" id="cancel_sig" class="btn btn-danger">cancel</button>
                            <button type="button" id="edit_sig" class="btn btn-warning">edit</button>
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
        //alert(signature);
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

    if("@if($errors->get('signature'))true @else'false'@endif" == "true ")
        { 
            $("#signature_pad").show();
            $("#signature_image").hide();
            $("#signature_updated").val('yes');
        } 

        

    $(document).ready(function(){
        

        
        $("#cancel_sig").click(function(){
            $("#signature_pad").hide();
            $("#signature_image").show();
            $("#signature_updated").val('no');
        });
        $("#edit_sig").click(function(){
            $("#signature_pad").show();
            $("#signature_image").hide();
            $("#signature_updated").val('yes');
        });

        $("#edit_front_card").click(function(){
            $("#front_card_image").hide();
            $("#front_card_image_upload").show();
            $("#card_front").val('yes');
        });
        $("#cancel_front_card").click(function(){
            $("#front_card_image").show();
            $("#front_card_image_upload").hide();
            $("#card_front").val('no');
        });

        $("#edit_back_card").click(function(){
            $("#back_card_image").hide();
            $("#back_card_image_upload").show();
            $("#card_back").val('yes');
        });
        $("#cancel_back_card").click(function(){
            $("#back_card_image").show();
            $("#back_card_image_upload").hide();
            $("#card_back").val('no');
        });


    });



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