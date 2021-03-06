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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/signature/jquery.signature.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/signature/jquery.signature.css') }}">

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


            <form method="post" action="{{route('PedimConsentForRapidCovid19Testing.create',$client_form_id)}}" class="position-relative">

            {{csrf_field()}} 

            <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
            
            <input type="hidden" value="pedim_consent_for_rapid_covid19_testings" id="table_name" name="table_name">

                <div class="top-section">
                    <h2>Consent for Rapid COVID19 Testing</h2>
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
                                               class="form-control custom-mainforminput @if($errors->get('patient_name')) is-invalid @endif"
                                               name="patient_name" id="patient_name"
                                               value="{{old('patient_name')}}" />
                                    </div>

                                    
                                </div>

                                <div class="col-12 col-md-2">

                                    <div class="padding-wrap">
                                        <label>Is Patient a Minor? <span
                                                    class="required">*</span></label><br />

                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio"
                                                                           name="is_patient_minor" id="is_patient_minor" value="yes" <?php if(old('is_patient_minor') == 'yes'){ echo 'checked';}?> > Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio"
                                                                           name="is_patient_minor" id="is_patient_minor" value="no" checked> No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2" id="parent_guardian_div" style="display: none;">
                                    <label>Parent or Guardian </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput @if($errors->get('parent_guardian')) is-invalid @endif"
                                               name="parent_guardian" id="parent_guardian"
                                               value="{{old('parent_guardian')}}" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput @if($errors->get('patient_email')) is-invalid @endif"
                                               name="patient_email" id="patient_email"
                                               value="{{old('patient_email')}}" />
                                        <p><small>example@example.com</small></p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif"
                                               name="telephone" id="telephone" value="{{old('telephone')}}"
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-section">
                        <p>I, , understand that the Rapid COVID19 Test is not covered by insurance and I agree to pay the cash price for this test.
                            I also understand and agree that laboratory confirmation testing may be required if the rapid test yields a positive result as
                            the rapid test kits have not yet been evaluated by the FDA. I understand and accept that additional fees
                            from the third party may or may not occur for this testing.
                            I understand that PedIM is not responsible for any charges owed to the third part laboratory.</b>
                        </p>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                            
                                <div class="col-12 col-md-4">

                                    <label class="" for="">Responsible Party</label>
                                    <div>
                                        <div  id="sig1"  style="width:370px !Important;height: 200px;@if($errors->get('sign_responsible_party')) border-color:red; @endif" ></div>  <br/>

                                    </div>

                                    <span id="clear1" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea class="@if($errors->get('sign_responsible_party')) is-invalid @endif" value="{{old('sign_responsible_party')}}" id="signature64" name="sign_responsible_party" style="display: none">{{old('sign_responsible_party')}}</textarea>

                                </div>

                                <div style="margin-left: 10px;" class="col-12 col-md-2">

                                    <div class="padding-wrap">
                                        <label>Date<span class="required">*</span> </label>
                                        <input type="text" value="{{old('date')}}"
                                               class="form-control custom-mainforminput dobpicker  @if($errors->get('date')) is-invalid @endif"
                                               name="date" id="date" readonly />
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

    var sig1 = $('#sig1').signature({syncField: '#signature64', syncFormat: 'PNG'}); 

    $('#clear1').click(function(e) {
        e.preventDefault();
        sig1.signature('clear');
        $("#signature64").val('');
    });





</script>

<script>
    $(document).ready(function(){
        $("input[type='radio']").change(function(){
            if( $(this).val()=="yes")
            {
                $("#parent_guardian_div").show();
            }
            else
            {
                $("#parent_guardian_div").hide();
            }
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