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
        $start_date = "";
        $end_date = "";
        $time_zone = "";
        //echo $appoint_date_range->start_date;
        if($appoint_date_range != null)
        {
            echo 
            $start_date = "";
            $end_date = "";
            $time_zone = "Pacific/Wake";
        } 
         
        
        ?>

<div class="wrapper d-flex flex-column">
    <main class="flex-1 d-flex">
        <style>
            body {
                overflow-y: auto;
            }
        </style>
        <div class="qcm-form">


            <form method="post" action="{{route('PedimAdultPrivacyPolicyAndConsentForTreatment.create',$client_form_id)}}" class="position-relative">
                {{csrf_field()}} 
                    <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
                    <input type="hidden" value="{{$time_before_interval ? $time_before_interval : '0'}}" id="time_before_interval" name="time_before_interval">
                    <input type="hidden" value="{{$start_date}}" id="start_date_limit" name="start_date_limit">
                    <input type="hidden" value="{{$end_date}}" id="end_date_limit" name="end_date_limit">
                    <input type="hidden" value="{{$time_zone}}" id="time_zone" name="time_zone">
                    <input type="hidden" value="adult_privacy_policy" id="table_name" name="table_name">

                <div class="top-section">
                    <h2>Adult - Privacy Policy, Financial Responsibility and Consent for Treatment</h2>
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
                                               class="form-control custom-mainforminput @if($errors->get('patient_name')) is-invalid @endif" value="{{old('patient_name')}}"
                                               name="patient_name" id="patient_name"
                                                />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value="{{old('email')}}"
                                               name="email" id="email"
                                                />
                                        <p><small>example@example.com</small></p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" value="{{old('telephone')}}"
                                               name="telephone" id="telephone"
                                                />
                                    </div>
                                </div> 

                                <div class="col-12 col-md-2">
                                    <div class="padding-wrap">
                                        <label>Date of birth</label>
                                        <input type="text" class="form-control custom-mainforminput dobpicker  @if($errors->get('dob')) is-invalid @endif" value="{{old('dob')}}" name="dob" id="dob" readonly />
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
                                <div class="col-12 col-md-4">

                                    <label class="" for="">Patient Signature</label>
                                    <div>
                                        <div  id="sig"  style="width:370px !Important;height: 200px;@if($errors->get('patient_signature')) border-color:red; @endif" ></div>  <br/>

                                    </div>

                                    <span id="clear" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea class="@if($errors->get('patient_signature')) is-invalid @endif" value="{{old('patient_signature')}}" id="signature64" name="patient_signature" style="display: none"></textarea>

                                </div>

                                <div style="margin-left: 20px;" class="col-12 col-md-4">
                                    <label class="" for="">Witness Signature</label>
                                    <div>
                                        <div  id="sig2"  style="width:370px !Important;height: 200px;@if($errors->get('witness_signature')) border-color:red; @endif" class=""></div>  <br/>

                                    </div>

                                    <span id="clear2" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea class="" id="signature642" name="witness_signature" style="display: none">{{old('witness_signature')}}</textarea>

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
                                               class="form-control custom-mainforminput dobpicker  @if($errors->get('patients_today_date')) is-invalid @endif" value="{{old('patients_today_date')}}"
                                               name="patients_today_date" id="patients_today_date" readonly />
                                    </div>

                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Witness Name <span class="required"></span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput @if($errors->get('witness_name')) is-invalid @endif" value="{{old('witness_name')}}"
                                               name="witness_name" id="witness_name"
                                                />
                                    </div>


                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Today's Date</label>
                                    <div class="padding-wrap">
                                        <input type="text" class="form-control custom-mainforminput dobpicker  @if($errors->get('witness_today_date')) is-invalid @endif" value="{{old('witness_today_date')}}"
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