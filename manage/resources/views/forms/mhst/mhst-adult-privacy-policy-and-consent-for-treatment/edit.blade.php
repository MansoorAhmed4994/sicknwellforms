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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

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

<?php
         
         
        
        ?>

<div class="wrapper d-flex flex-column">
    <main class="flex-1 d-flex">
        <style>
            body {
                overflow-y: auto;
            }
        </style>
        <div class="qcm-form">


            <form method="post" action="{{route('MhstAdultPrivacyPolicyAndConsentForTreatment.update',$submission_id)}}" class="position-relative">
                {{csrf_field()}} 
                    <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
                    <input type="hidden" value="mhst_adult_privacy_policy_consent_treatments" id="table_name" name="table_name">

                <div class="top-section">
                    <h2>Mhst Adult - Privacy Policy and Consent For Treatment</h2>
                </div>
                @if(count($errors) > 0)
                <div class="alert alert-danger my-2" style="font-size: 15px">
                    <i class="fas fa-exclamation-triangle mr-2"></i><span>Please fill the Required
                        fields</span>
                </div>
                @endif
                <div class="form-section">
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Patient Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput @if($errors->get('patient_name')) is-invalid @endif" value=" @if(isset($MhstAdultPrivacyPolicy)) {{$MhstAdultPrivacyPolicy->patient_name}} @else{{old('patient_name')}}  @endif"
                                               name="patient_name" id="patient_name"
                                                />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value="@if(isset($MhstAdultPrivacyPolicy)) {{$MhstAdultPrivacyPolicy->email}} @else{{old('email')}}  @endif"
                                               name="email" id="email"
                                                />
                                        <p><small>example@example.com</small></p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" value="@if(isset($MhstAdultPrivacyPolicy)){{$MhstAdultPrivacyPolicy->telephone}}@else{{old('telephone')}}@endif"
                                               name="telephone" id="telephone"/>
                                    </div>
                                </div> 

                                <div class="col-12 col-md-2">
                                    <div class="padding-wrap">
                                        <label>Date of birth</label>
                                        <input type="text" class="form-control custom-mainforminput dobpicker  @if($errors->get('dob')) is-invalid @endif" value="@if(isset($MhstAdultPrivacyPolicy)){{$MhstAdultPrivacyPolicy->dob}}@else{{old('dob')}}@endif" name="dob" id="dob" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-section">
                        <p>I hereby authorize Pediatric and Internal Medicine Specialists, Inc, it’s affiliated physicians and
                            other medical personnel in charge of my care to administer examinations, immunizations, treatments and view my
                            prescription history from an external source and telemedicine services as needed or requested by the patient that may
                            be deemed medically necessary in the exercise of their professional judgment.  Additionally, by signing this form I
                            acknowledge that I have received a copy of the Privacy Policies
                            and Financial Responsibility Policy for the office of Pediatric and Internal Medicine Specialists, Inc.</b>
                        </p>
                    </div>


                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-4" id="patient_signature_pad" style="display:none!important">
                                    <input type="hidden" id="patient_signature_updated"  name="patient_signature_updated" value="no"> 
                                    <input type="hidden" id="patient_signature_src"  name="patient_signature_src" value="{{$MhstAdultPrivacyPolicy->patient_signature}}">
                                    <label class="" for="">Patient Signature</label>
                                    <div>
                                        <div  id="sig"  style="width:370px !Important;height: 200px;@if($errors->get('patient_signature')) border-color:red; @endif" ></div>  <br/>

                                    </div>

                                    <span id="clear" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea class="@if($errors->get('patient_signature')) is-invalid @endif" value="{{old('patient_signature')}}" id="signature64" name="patient_signature" style="display: none"></textarea>

                                </div>

                                <div class="col-12 col-md-4 signature_pad_image" id="patient_signature_image">
                                    <img src="{{asset('manage/storage/'.$MhstAdultPrivacyPolicy->patient_signature)}}">
                                </div>  


                                <div style="margin-left: 20px;display:none!important" class="col-12 col-md-4" id="witness_signature_pad"  >
                                    <input type="hidden" id="witness_signature_updated" name="witness_signature_updated" value="no">   
                                    <input type="hidden" id="witness_signature_src"  name="witness_signature_src" value="{{$MhstAdultPrivacyPolicy->witness_signature}}"> 
                                    <label class="" for="">Witness Signature</label>
                                    <div>
                                        <div  id="sig2"  style="width:370px !Important;height: 200px;@if($errors->get('witness_signature')) border-color:red; @endif" class=""></div>  <br/>

                                    </div>

                                    <span id="clear2" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea class="" id="signature642" name="witness_signature" style="display: none">{{old('witness_signature')}}</textarea>

                                </div>

                                <div class="col-12 col-md-4 signature_pad_image" id="witness_signature_image">

                                    <img src="{{asset('manage/storage/'.$MhstAdultPrivacyPolicy->witness_signature)}}">
                                </div>


                            </div>

                            

                            <div class="row no-gutters">
                                <div class="col-12  col-md-4">
                                    <button type="button" id="cancel_pat_sig" class="btn btn-danger">cancel</button>
                                    <button type="button" id="edit_pat_sig" class="btn btn-warning">edit</button>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="col-12 ">
                                        <button type="button" id="cancel_wit_sig" class="btn btn-danger">cancel</button>
                                        <button type="button" id="edit_wit_sig" class="btn btn-warning">edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">

                                <div class="col-12 col-md-2">

                                    <div class="padding-wrap">
                                        <label>Today's Date</label>
                                        <input type="text" 
                                               class="form-control custom-mainforminput dobpicker  @if($errors->get('patients_today_date')) is-invalid @endif" value="@if(isset($MhstAdultPrivacyPolicy)){{$MhstAdultPrivacyPolicy->patients_today_date}}@else{{old('patients_today_date')}}@endif"
                                               name="patients_today_date" id="patients_today_date" readonly />
                                    </div>

                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Witness Name <span class="required"></span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput @if($errors->get('witness_name')) is-invalid @endif" value="@if(isset($MhstAdultPrivacyPolicy)){{$MhstAdultPrivacyPolicy->witness_name}}@else{{old('witness_name')}}@endif"
                                               name="witness_name" id="witness_name"
                                                />
                                    </div>


                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Today's Date</label>
                                    <div class="padding-wrap">
                                        <input type="text" class="form-control custom-mainforminput dobpicker  @if($errors->get('witness_today_date')) is-invalid @endif" value="@if(isset($MhstAdultPrivacyPolicy)){{$MhstAdultPrivacyPolicy->witness_today_date}}@else{{old('witness_today_date')}}@endif"
                                               name="witness_today_date" id="witness_today_date" readonly />
                                    </div>


                                </div>



                            </div>
                        </div>

                    </div>


                </div>
                <div class="form-section last mb-5">
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Submit"
                               id="signaturebtn"
                               class="submitbtn" style="background: red;" />
                    </div>
                </div>


            </form>
        </div>

    </main>
</div>


<script type="text/javascript">
    var base_url = '<?php echo e(url('/')); ?>';
    var token = "<?php echo csrf_token() ?>";
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});

    $('#clear').click(function(e) 
    {
        e.preventDefault();
        sig.signature('clear'); 
 
    });


    var sig2 = $('#sig2').signature({syncField: '#signature642', syncFormat: 'PNG'});

    $('#clear2').click(function(e) {
        e.preventDefault(); 
        //sig2.signature({syncField: '#signature64', syncFormat: 'PNG'});
        sig2.signature('clear'); 
        
    });



    $('#signaturebtn2').on('click', function(e)
    {
        var signature = jQuery("#signature64").val();
       
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

    $('#signaturebtn2').on('click', function(e)
    {
        var signature = jQuery("#signature642").val();
        
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
                alert(response);
            }
        });
    }) 
        if("@if($errors->get('witness_signature'))true @else'false'@endif" == "true ")
        { 
            $("#witness_signature_pad").show();
            $("#witness_signature_image").hide();
            $("#witness_signature_updated").val('yes');
        } 

        if("@if($errors->get('patient_signature'))true @else'false'@endif" == "true ")
        { 
            $("#patient_signature_pad").show();
            $("#patient_signature_image").hide();
            $("#patient_signature_updated").val('yes');
        } 

    $(document).ready(function(){
        $("#cancel_pat_sig").click(function(){
            $("#patient_signature_pad").hide();
            $("#patient_signature_image").show();
            $("#patient_signature_updated").val('no');
            
        });
        $("#edit_pat_sig").click(function(){
            $("#patient_signature_pad").show();
            $("#patient_signature_image").hide();
            $("#patient_signature_updated").val('yes');
        });

        
        $("#cancel_wit_sig").click(function(){
            $("#witness_signature_pad").hide();
            $("#witness_signature_image").show();
            $("#witness_signature_updated").val('no');
        });
        $("#edit_wit_sig").click(function(){
            $("#witness_signature_pad").show();
            $("#witness_signature_image").hide();
            $("#witness_signature_updated").val('yes');
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

<script src="{{ asset('public/theme-resources/js/jquery.plugin-timepicker.js') }}"></script>

<script src="{{ asset('public/theme-resources/js/jquery.timeentry.js') }}"></script>

<script src="{{ asset('public/theme-resources/js/main.js') }}"></script>


<script src="{{ asset('public/theme-resources/js/numeric-1.2.6.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bezier.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.signaturepad.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/json2.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/html2canvas.js') }}"></script>



</body>

</html>