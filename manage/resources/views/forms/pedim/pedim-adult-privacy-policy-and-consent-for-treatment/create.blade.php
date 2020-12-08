
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


            <form method="post" action="{{route('PedimAdultPrivacyPolicyAndConsentForTreatment.create')}}" class="position-relative">
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

                <div class="form-section">
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Patient Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="patient_name" id="patient_name"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="email" id="email"
                                               value="" />
                                        <p><small>example@example.com</small></p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone" id="telephone" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <div class="padding-wrap">
                                        <label>Date of birth</label>
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
                                               name="date_of_birth" id="date_of_birth" readonly />
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
                                    <div id="signArea" >
                                        <label>Patient's Signature</label>
                                        <div class="sig sigWrapper" style="height:auto;">
                                            <canvas class="sign-pad" name="patient_signature" id="sign-pad" width="300" height="100"></canvas>
                                        </div>
                                        <span class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">
                Clear
              </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div id="signArea_w">
                                        <label>Witness Signature</label>
                                        <div class="sig sigWrapper" style="height:auto;">
                                            <canvas class="sign-pad" name="witness_signature" id="sign-pad_w" width="300" height="100"></canvas>
                                        </div>
                                        <span class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">
                Clear
              </span>
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
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
                                               name="patients_today_date" id="patients_today_date" readonly />
                                    </div>

                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Witness Name <span class="required"></span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="witness_name" id="witness_name"
                                               value="" />
                                    </div>


                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Today's Date</label>
                                    <div class="padding-wrap">
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
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
                               id="btnSaveSign2"
                               class="submitbtn" style="background: red;" />
                    </div>
                </div>


            </form>
        </div>

    </main>
</div>

<script>
    $(document).ready(function() {
        $('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
    });

    $("#btnSaveSign2").click(function(e){
        html2canvas([document.getElementById('sign-pad')], {
            onrendered: function (canvas) {
                var canvas_img_data = canvas.toDataURL('image/png');
                var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                $.ajax({
                    url: 'save_sign.php',
                    data: { img_data:img_data },
                    type: 'post',
                    dataType: 'json',
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    });

</script>

<script>
    $(document).ready(function() {
        $('#signArea_w').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
    });

    $("#btnSaveSign").click(function(e){
        html2canvas([document.getElementById('sign-pad_w')], {
            onrendered: function (canvas) {
                var canvas_img_data = canvas.toDataURL('image/png');
                var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");

                $.ajax({
                    url: 'save_sign.php',
                    data: { img_data:img_data },
                    type: 'post',
                    dataType: 'json',
                    success: function (response) {
                        window.location.reload();
                    }
                });
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