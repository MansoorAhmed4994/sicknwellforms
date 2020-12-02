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


            <form method="post" action="http://sicknwellforms.desenador.com/QcmTelemedicineForm/create" class="position-relative">


            <div class="top-section">
                    <span style="float: right;color: blue; text-decoration: underline; "><a href="https://sicknwellforms.thqcompany.com/PlanDeSaludBarato/1">Español</a></span>

                    <h2>Qcard Registration</h2>
                </div>

                <div class="form-section">
                    <p>Sign up for the Qcard and get medical services at any of our 10 Quick Care Med locations.
                        Become a member for only $1 a day, plus a $10 copay when you visit. Locations available in  Citrus, Marion,
                        Alachua and Levy counties.</b>
                    </p>
                </div>

                <div class="form-section">
                    <div class="form-group row mt-4">
                     <div class="col-12 col-md-12">

                         <div class="cok-12 col-md-4">
                         <div class="padding-wrap">
                             <label>Do you agree to the terms and conditions?
                             <span class="required">*</span> </label></div>
                             <label class="mt-2"><input type="checkbox"
                                                        name="answer" value="yes">
                                    Yes</label>
                         </div>
                     </div>
                    </div>

                         <div class="row mt-4">
                             <div class="col-12 col-md-12">
                                 <div class="cok-12 col-md-4">
                             <div class="padding-wrap">
                                 <label>Qcard Membership</label></div>
                             <label class="mt-2"><input type="radio"
                                                        name="answer" value="yes" checked>
                                 $90 for the first 90 days then, $30 per month</label>
                         </div>
                             </div>
                         </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="email" id="email"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>First Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="first_name" id="first_name"
                                               value="" />
                                    </div>
                                </div>


                                <div class="col-12 col-md-4">
                                    <label>Last Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="last_name" id="last_name"
                                               value="" />
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                        <p>Please note. A Qcard representative will contact you shortly to arrange for payment and answer
                            any questions you may have.</p>



                </div>

                <div class="form-group row mt-4">
                    <div class="col-12 col-md-6">
                    <h2>Member</h2>
                    </div>
                </div>

                <div class="form-section">
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name" id="full_name"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone" id="telephone" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="patient_email" id="patient_email"
                                               value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Address <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="address" id="address"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>City <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="city" id="city" value=""
                                        />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>State <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="state" id="state"
                                               value="" />
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">
                                    <label>Zip <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="zip" id="zip"
                                               value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row no-gutters">
                        <div class="col-12 col-md-2">
                            <div class="padding-wrap">
                                <label>Date of birth</label>
                                <input type="text" value=""
                                       class="form-control custom-mainforminput dobpicker  "
                                       name="dob" id="dob" readonly />
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <h2>Member/Responsible Party</h2>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Full Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_m" id="full_name_m"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone_m" id="telephone_m" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="patient_email_m" id="patient_email_m"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <label>Relation to patient (if not self)<span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation_patient" id="relation_patient"
                                               value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <div id="signArea" >
                                        <!--<h2 class="tag-ingo">Put signature below,</h2>-->
                                        <label>Signature</label>
                                        <div class="sig sigWrapper" style="height:auto;">
                                          <!--  <div class="typed"></div>-->
                                            <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
                                        </div>
                                        <span class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">
                Clear
              </span>
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">

                                    <div class="padding-wrap">
                                        <label>Today's Date</label>
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
                                               name="todate" id="todate" readonly />
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>



                  <!--  <div data-component="divider" style="border-bottom:1px solid #e6e6e6;">


                    </div>-->



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
                //ajax call to save image inside folder
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
    var base_url = 'http://sicknwellforms.desenador.com';
    // selectElement('visit_type', '');
    // selectElement('membership_type', '');
    // selectElement('gender', '');
    IsMinorPatientFunction();

    function IsMinorPatientFunction()
    {
        //alert('');
        var value = "";
        if(value == 'yes')
        {
            //   var element = document.getElementsByClassName("showIfMinor");
            //   element.classList.toggle("d-none");

            $('.showIfMinor').toggleClass('d-none')
        }

    }

    $('.submitbtn').on('click',function(){

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