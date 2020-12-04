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


            <form method="post" action="http://sicknwellforms.desenador.com/QcmTelemedicineForm/create" class="position-relative">


                <div class="top-section">

                    <strong style="color: blue; font-size: 14pt" >Physician Information</strong>
                </div>
                <div class="form-section">
                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-3">
                                    <label>Provider Name
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="provider_name" id="provider_name"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone" id="telephone" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <label>Fax </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="fax" id="fax" value=""
                                        />
                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                                    <label>Emails </label>
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
                    <div class="row no-gutters">
                        <div class="col-12 col-md-3">
                            <label>Contact Person / Referral Coordinator
                            </label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="contact_person" id="contact_person"
                                       value="" />
                            </div>
                        </div>
                    </div>

                </div>


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
                                                           class="form-control custom-mainforminput "
                                                           name="facility_name" id="facility_name"
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>Address 1</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput "
                                                           name="Address_1" id="Address_1"
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>Address 2</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput "
                                                           name="Address_2" id="Address_2"
                                                           value="" />
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
                                                           class="form-control custom-mainforminput "
                                                           name="city" id="city"
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label>State</label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput "
                                                           name="state" id="state"
                                                           value="" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label>Zip</label>
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
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="form-section">

                    <strong style="color: blue; font-size: 14pt" >Patient Information</strong>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-3">
                                    <label>Patient Name
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="patient_name" id="patient_name"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <div class="padding-wrap">
                                        <label>Date of birth</label>
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
                                               name="dob_question" id="dob_question" readonly />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Phone Number </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="phone_number" id="phone_number" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Alternate Phone
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="alternate_telephone" id="alternate_telephone" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                        <div class="col-12 col-md-3">
                            <label>Email</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="email_patient" id="email_patient"
                                       value="" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <label>Address</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="Address_patient" id="Address_patient"
                                       value="" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <label>Address 2</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="Address_2_patient" id="Address_2_patient"
                                       value="" />
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
                                       class="form-control custom-mainforminput "
                                       name="city" id="city_patient"
                                       value="" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <label>State</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="state" id="state_patient"
                                       value="" />
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <label>Zip</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="zip" id="zip_patient"
                                       value="" />
                            </div>
                        </div>
                            </div></div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                        <div class="col-12 col-md-3">
                            <label>Height</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="height" id="height"
                                       value="" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <label>Weight</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="weight" id="weight"
                                       value="" />
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <label>Neck Size</label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
                                       name="neck_size" id="neck_size"
                                       value="" />
                            </div>
                        </div>
                            </div></div>
                    </div>
                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-4">

                            <label>Insurance Card Front</label>
                            <div class="padding-wrap">
                                <input type="file"
                                       class="form-control custom-mainforminput "
                                       name="file" id="front_card"
                                       value=""  />
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label>Insurance Card Back</label>
                            <div class="padding-wrap">
                                <input type="file"
                                       class="form-control custom-mainforminput "
                                       name="file" id="back_card"
                                       value="" />
                            </div>
                        </div>

                    </div>


                </div>

                <div class="form-section">
                    <strong style="color: blue; font-size: 14pt">Section A<small> - Reason for Study: Please check all that apply (minimum of TWO).</small></strong>
                </div>

                <div class="form-section">


                    <strong style="color: blue; font-size: 14pt">Symptoms or Medical History</strong>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <label> Please check all that apply, including a minimum of TWO of the symptoms with an *. </label>
                        </div>
                    </div>


                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="*Hypertention">
                            <label> *Hypertention </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="*History of Stroke">
                            <label > *History of Stroke </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="*Impaired Cognition">
                            <label > *Impaired Cognition </label>
                        </div>
                    </div>
                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="*Ischemic Heart Disease">
                            <label> *Ischemic Heart Disease </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="*Mood Disorders">
                            <label > *Mood Disorders </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="*Excessive Daytime Sleepiness">
                            <label > *Excessive Daytime Sleepiness </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="*Insomnia">
                            <label> *Insomnia </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Atrial Fibrillation">
                            <label > Atrial Fibrillation </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Reflux">
                            <label > Reflux </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="Witnessed Apnea">
                            <label> Witnessed Apnea </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Congestive Heart Failure">
                            <label > Congestive Heart Failure </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Diabetes">
                            <label> Diabetes </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="Memory Loss">
                            <label> Memory Loss </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Depression">
                            <label > Depression </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Sleep Disturbance">
                            <label> Sleep Disturbance </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="Seizures">
                            <label> Seizures </label>
                        </div>

                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="COPD">
                            <label > COPD </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Morning Headache">
                            <label> Morning Headache </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <input type="checkbox" value="Nocturia">
                            <label> Nocturia </label>
                        </div>

                        <div style="display: flex;" class="col-12 col-md-3">
                            <input type="checkbox" value="Large neck size (greater than 17&quot; for men, greater than 16&quot; for women).">
                            <label>&nbsp;Large neck size (greater than 17" for men, greater than 16" for women)</label>
                        </div>


                        <div class="col-12 col-md-3">
                            <input type="checkbox" value="Other">
                            <label> Other </label>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-3">


                            <label>Is patient on Oxygen? </label><br />

                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <label class="mt-2"><input type="radio"
                                                               name="answer" value="yes"> Yes</label>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label class="mt-2"><input type="radio"
                                                               name="answer" value="no" > No</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-2">

                            <label>LPM?
                            </label>
                            <div class="padding-wrap">
                                <input type="text"
                                       class="form-control custom-mainforminput "
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

                            <input type="checkbox" value="G47.33&nbsp; &nbsp; &nbsp;Obstructive Sleep Apnea">
                            <label> G47.33&nbsp; &nbsp; &nbsp;Obstructive Sleep Apnea </label>
                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" value="G47.10&nbsp; &nbsp; &nbsp;Other Hypersomnia-Excessive Daytime Somnolence">
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

                            <input type="checkbox" value="Commercial 95800">
                            <label > Commercial 95800 </label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" value="Medicare G0399">
                            <label > Medicare G0399</label>

                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <input type="checkbox" value="Self-Pay $169">
                            <label > Self-Pay $169</label>

                        </div>
                    </div>

                </div>


                <div class="form-section">


                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-10">
                            <label>Comment</label>
                            <textarea
                                    class="form-control custom-mainforminput "
                                    rows="4" name="comment"
                                    id="comment"></textarea>
                        </div>
                    </div>


                    <div class="form-group row mt-4">

                        <div class="col-12 col-md-3">

                            <div class="padding-wrap">
                                <label>Referring Physician Name<span class="required">*</span> </label>
                                <input type="text" value=""
                                       class="form-control custom-mainforminput "
                                       name="referring_phy_name" id="referring_phy_name"  />
                            </div>

                        </div>

                        <div style="margin-left: 20px;" class="col-12 col-md-4">
                            <label class="" >Signature<span class="required">*</span></label>
                            <div id="sig1" class="kbw-signature"></div>  <br/>

                            <span id="clear1" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                            <textarea id="signature641" name="signed" style="display: none"></textarea>

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

    var sig1 = $('#sig1').signature({syncField: '#signature641', syncFormat: 'PNG'});

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