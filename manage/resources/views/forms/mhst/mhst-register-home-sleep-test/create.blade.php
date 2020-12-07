
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



<div class="wrapper d-flex flex-column">
    <main class="flex-1 d-flex">
        <style>
            body {
                overflow-y: auto;
            }
        </style>
        <div class="qcm-form">


            <form method="post" action="http://sicknwellforms.desenador.com/QcmTelemedicineForm/create" class="position-relative">

                <div class="custom-wizard">


                    <div class="wizard-sec active ">
                        <div class="top-section">
                            <h2>Sleep Test Registration</h2>
                        </div>
                        <div class="form-section">
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">


                                <div class="col-12 col-md-3">
                                    <label>Full Name (First, Middle Initial, Last) <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name" id="full_name"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="email" id="email"
                                               value="" />
                                        <p><small>example@example.com</small></p>
                                    </div>
                                </div>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Cellular Phone Number <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone" id="telephone" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Daytime Telephone Number</label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone_d" id="telephone_d" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>State of Residence
                                                <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="state_name" id="state_name"
                                                       value="" />
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-3">
                                    <label>How did you hear about us?<span class="required">*</span> </label>
                                    <select
                                            class="form-control custom-mainforminput  "
                                            value="" name="contact_managment" id="contact_managment">
                                        <option value=""> </option>
                                        <option value="Google">Google</option>
                                        <option value="Facebook"> Facebook</option>
                                        <option value="Twitter"> Twitter</option>
                                        <option value="Internet"> Internet</option>
                                        <option value="Freind"> Friend</option>
                                        <option value="Family"> Family</option>
                                        <option value="Doctor"> Doctor</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-6">
                                <strong style="color: blue; font-size: 12pt; font-weight: bold">Ship Sleep Test to:</strong>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">

                                <div class="row no-gutters">
                                    <div class="col-12 col-md-3">
                                        <label>Shipping Address <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text"
                                                   class="form-control custom-mainforminput "
                                                   name="shipping_address" id="shipping_address"
                                                   value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label>Shipping Address Line 2 </label>
                                        <div class="padding-wrap">
                                            <input type="text"
                                                   class="form-control custom-mainforminput "
                                                   name="shipping_address_line_2" id="shipping_address_line_2" value=""
                                            />
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">

                                <div class="row no-gutters">
                                    <div class="col-12 col-md-3">
                                        <label>Shipping City <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text"
                                                   class="form-control custom-mainforminput "
                                                   name="shipping_city" id="shipping_city"
                                                   value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label>Shipping State <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text"
                                                   class="form-control custom-mainforminput "
                                                   name="state" id="state" value=""
                                            />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label>Shipping Zip <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text"
                                                   class="form-control custom-mainforminput "
                                                   name="shipping_zip" id="shipping_zip"
                                                   value="" />
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                        <div data-component="divider" style="border-bottom:1px solid #e6e6e6;">
                        </div>

                        <div class="form-group row mt-4">

                            <div class="col-12 col-md-12">

                                <div class="row no-gutters">
                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <label>Date of birth</label>
                                    <input type="text" value=""
                                           class="form-control custom-mainforminput dobpicker  "
                                           name="dob" id="dob" readonly />
                                </div>
                            </div>


                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                <label>Gender<span class="required">*</span> </label>
                                <select
                                        class="form-control custom-mainforminput  "
                                        value="" name="gender" id="gender">
                                    <option value=""> </option>
                                    <option value="Male">Male</option>
                                    <option value="Female"> Female</option>

                                </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <label>Race</label>
                                    <input type="text" value=""
                                           class="form-control custom-mainforminput "
                                           name="race" id="race" readonly />
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <label>Preferred Language</label>
                                    <input type="text" value=""
                                           class="form-control custom-mainforminput "
                                           name="preferred_language" id="preferred_language" readonly />
                                </div>
                            </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-section last mb-5">
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Submit & Continue"
                                       id="btnSaveSign2"
                                       class="submitbtn nextprevbtn next" style="background: red;" />
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-6">
                                <strong style="color: blue; font-size: 12pt; font-weight: bold">Payment options and availability of service. </strong>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <p>  We are licensed and available through self-pay in</p> <p style="font-weight: bold"> Alabama, Arizona, Arkansas, California, Colorado, Delaware, Florida, Georgia, Illinois, Indiana, Iowa,
                                    Kansas, Kentucky, Louisiana, Maine, Maryland, Massachusetts, Michigan, Missouri, Minnesota, Montana, New Jersey,
                                    New York, North Carolina, North Dakota, Ohio, Oklahoma, South Carolina, Texas, Tennessee, Utah, Virginia, West Virginia and Wyoming.
                                </p>

                            </div>


                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <p>If you have any questions, please call us at (877) 837-5337. We look forward to serving you.</p>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-6">
                                <p>We are licensed and able to accept most insurances or self-pay in Florida.</p>
                            </div>
                        </div>

                        <div data-component="divider" style="border-bottom:1px solid #e6e6e6;">


                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-6">
                                <strong style="color: blue; font-size: 14pt; font-weight: bold">Payment Options (Choose One):</strong>
                            </div>
                        </div>

                        <div id="accordion" class="custom-accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                        Click here to Pay via Credit Card or Paypal Account
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="form-input-wide">
                                            <div class="form-html">
                                                <p><strong style="color: black; font-weight: bold">
                                                        Self paid available in Alabama, Arizona, Arkansas, California, Colorado,
                                                        Delaware, Florida, Georgia, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana,
                                                        Maine, Maryland, Massachusetts, Michigan, Missouri, Minnesota, Montana, New Jersey,
                                                        New York, North Carolina, North Dakota, Ohio, Oklahoma,
                                                        South Carolina, Texas, Tennessee, Utah, Virginia, West Virginia and Wyoming.   Select below.
                                                    </strong></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12 col-md-12">

                                                <label class="mt-2"><input type="checkbox"
                                                                           name="   " value="98.00">  Telemedicine Consultation $ 98.00

                                                    <p style="font-size: 10pt; color: grey;">Consultation with Board Certified Sleep Doctor. Select this option if you have been referred by
                                                        Primary Doctor, Dentist or are experiencing sleep related issues.
                                                    </p>

                                                </label>
                                            </div>

                                            <div class="col-12 col-md-12">

                                                <label class="mt-2"><input type="checkbox"
                                                                           name=" " value="169.00">  Home Sleep Test $ 169.00

                                                    <p style="font-size: 10pt; color: grey;">Select this option if initial Sleep Consultation has already
                                                        been done by a Certified Sleep Doctor.
                                                    </p>

                                                </label>
                                            </div>
                                            <div class="col-12 col-md-12">

                                                <label class="mt-2"><input type="checkbox"
                                                                           name=" " value="98.00">  Telemedicine Follow-up Consultation $ 98.00

                                                    <p style="font-size: 10pt; color: grey;">Consultation with Board Certified Sleep Doctor.
                                                        Follow-up consultation to discuss results and course of action needed.
                                                    </p>

                                                </label>
                                            </div>

                                            <div class="col-12 col-md-12">

                                                <label class="mt-2"><input type="checkbox"
                                                                           name=" " value="250.00">  Telemedicine Consultation & Home Sleep Test (Options 1 & 2 combined) $ 250.00

                                                    <p style="font-size: 10pt; color: grey;">Select this option if this is the first time dealing with issue or referred by your Primary Doctor or Dentist.
                                                        Telemedicine Consultation with Doctor and Home Sleep Test Package. $17.00 Savings.
                                                    </p>

                                                </label>
                                            </div>

                                            <div class="col-12 col-md-12">

                                                <label class="mt-2"><input type="checkbox"
                                                                           name=" " value="300.00">   Telemedicine Consultation, Home Sleep Test & Follow-up Telemedicine Consult (Options 1, 2 & 3 combined) $ 300.00

                                                    <p style="font-size: 10pt; color: grey;">Select this option if this is the first time dealing
                                                        with issue and referred by your Primary Doctor or Dentist. Telemedicine Consultation with Doctor.
                                                        Home Sleep Test and Telemedicine Follow Up consultation Package. $65.00 Savings.

                                                    </p>

                                                </label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <b>
                                                    <span style="float: left; font-size:  14px" id="total">Total</span>
                                                    <span style="float: right; font-size:  14px" class="payment-price">
                      <span data-wrapper-react="true">
                        $
                        <span id="payment_total">0.00</span>
                      </span>
                    </span>
                                                </b>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Click here to Pay with Insurance (Available in Florida only)
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="form-section">
                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Patient's Name (First, Middle Initial, Last)</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="patient_name" id="patient_name"
                                                               value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label>Patient's  Email</label>
                                                    <div class="padding-wrap">
                                                        <input type="email"
                                                               class="form-control custom-mainforminput "
                                                               name="patient_email" id="patient_email"
                                                               value="" />
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-8">
                                                    <label>Primary Insurance Company Name and Plan</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="insurance_name" id="insurance_name"
                                                               value="" />
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Member ID#</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="member_id_1" id="member_id_1"
                                                               value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label>Subscriber Name</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="subcribers_name_1" id="subcribers_name_1"
                                                               value="" />
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-8">
                                                    <label>Secondary Insurance Company Name and Plan</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="secondary_insurance_name" id="secondary_insurance_name"
                                                               value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Member ID#</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="member_id_2" id="member_id_2"
                                                               value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label>Subscriber Name</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="subcribers_name_2" id="subcribers_name_2"
                                                               value="" />
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Insurance Card Front Upload</label>
                                                    <div class="padding-wrap">
                                                        <input type="file"
                                                               class="form-control custom-mainforminput "
                                                               name="file" id="front_card"
                                                               value=""  />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Insurance Card Back Upload</label>
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
                                            <div class="form-group row mt-">
                                                <div class="col-12 col-md-12">
                                                    <p>
                                                        <span><strong>Please note:</strong> </span>Doctor's script will be necessary to process payment through your insurance.
                                                        <span><strong>The SicknWellTesting team can help by reaching out to your doctor, if a script is not available at this time.</strong></span>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Primary physician (optional)</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="patient_physician" id="patient_physician"
                                                               value="" />
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label>Physician Telephone Number</label>
                                                    <div class="padding-wrap">
                                                        <input type="tel"
                                                               class="form-control custom-mainforminput "
                                                               name="physician_tel" id="physician_tel"
                                                               value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label>Extension</label>
                                                    <div class="padding-wrap">
                                                        <input type="text"
                                                               class="form-control custom-mainforminput "
                                                               name="extension" id="extension"
                                                               value="" />
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="form-group row mt-4">
                                                <div class="col-12 col-md-3">
                                                    <label>Upload Photo of Physician Script</label>
                                                    <div class="padding-wrap">
                                                        <input type="file"
                                                               class="form-control custom-mainforminput "
                                                               name="file" id="phy_script"
                                                               value="" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section last mb-5">
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Submit & Continue"
                                       id="btnSaveSign3"
                                       class="submitbtn nextprevbtn next" style="background: red;" />
                            </div>
                        </div>
                    </div>
                    <div class="wizard-sec">
                        <div class="top-section">
                            <h2 style="color: blue" >Register for a Home Sleep Testing – Terms & Conditions</h2>
                        </div>

                        <div style="margin-top: 20px">
                            <strong style="color: black; font-weight: bold; font-size: 12pt">Consent for Treatment | Driving Acknowledgement | Financial Responsibility | Terms & Conditions</strong>
                        </div>
                        <div data-component="divider" style="border-bottom:1px solid #e6e6e6; margin-top: 30px"></div>
                        <div class="form-section">

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-6">

                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Patient Name <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="patient_first_name" id="patient_first_name"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label >Date of Birth<span class="required">*</span></label>
                                            <input type="text" value=""
                                                   class="form-control custom-mainforminput dobpicker  "
                                                   name="dob_patient_terms" id="dob_patient_terms" readonly />
                                        </div>


                                        <div class="col-12 col-md-4">

                                            <div class="padding-wrap">
                                                <label>Is Patient a Minor? </label>

                                                <div class="col-12 col-md-4">
                                                    <label class="mt-2"><input id="checkbox_div" type="checkbox"
                                                                               name=" " value="yes">Yes</label>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-6">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4" id="parent_guardian_div" style="display: none;">
                                            <label>Parent or Guardian </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="parent_guardian" id="parent_guardian"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Email <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="email"
                                                       class="form-control custom-mainforminput "
                                                       name="patient_email_terms" id="patient_email_terms"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Telephone <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="patient_telephone_terms" id="patient_telephone_terms" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="accordion2" class="custom-accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Consent for Treatment
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                        <div class="form-input-wide">
                                            <div class="form-html">
                                                <p style="color: black;">
                                                    I hereby authorize My Home Sleep Testing, LLC, it’s affiliated physicians and other medical personnel in charge
                                                    of my care to administer examinations, treatments and view my prescription history from an external source and telemedicine
                                                    services as needed or requested by the patient that may be deemed medically necessary in the exercise of their professional judgment.
                                                    Additionally, by signing this form I acknowledge that I have reviewed the Terms and Conditions page at MHSleepTesting.com,
                                                    which includes the Privacy Policies and Financial Responsibility Policy for My Home Sleep Testing, LLC.
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour">
                                        Sleep Deprived or Drowsy Driving Acknowledgement
                                    </a>
                                </div>
                                <div id="collapsefour" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                        <p>
                                            Driving sleep deprived or drowsy is a combination of sleepiness and fatigue but can also occur due to untreated sleep disorders, medications,
                                            drinking alcohol, and shift work.  Often it occurs when the driver is too tired to remain alert while operating a motor vehicle. Drowsy drivers’
                                            cognitive abilities may be impaired, causing reduced coordination and judgment similar to the affect of alcohol; making it just as dangerous as
                                            drinking and driving. Due to the severity of consequences that occur while driving drowsy, Home Sleep Testing feels obligated to inform you of the
                                            potential increased
                                            risks of vehicular accidents as well as injuries to the driver and others.
                                            Drivers must know the warning signs of drowsy driving that include:
                                        </p>

                                        <li style="font-size: 14px">
                                            Frequent blinking or yawning
                                        </li>
                                        <br>
                                        <br>
                                        <li style="font-size: 14px">
                                            Missing turns or exits
                                        </li>
                                        <br>
                                        <br>
                                        <li style="font-size: 14px">
                                            Forgetting past few miles driven
                                        </li>
                                        <br>
                                        <br>
                                        <li style="font-size: 14px">
                                            Drifting from one lane to another
                                        </li>
                                        <br>
                                        <br>
                                        <li style="font-size: 14px">
                                            Hitting the rumble strips in the center and sides of the road
                                        </li>

                                        <p>
                                            The only true way to address driving drowsy is to sleep. If you feel that you are becoming drowsy while driving then you should immediately pull
                                            over on the roadside. Please know that while caffeine may make the driver feel alert it is only for a brief amount of time. Turning up the radio,
                                            singing, rolling the windows down, getting out of the car to walk, etc.
                                            are NOT effective ways to deter drowsiness. The options that a drowsy driver has while on the roadside are to:
                                        </p>



                                        <li style="font-size: 14px">
                                            Take a nap until rested enough to drive
                                        </li>
                                        <br>
                                        <br>
                                        <li style="font-size: 14px">
                                            Call a friend or family member to come to pick you up
                                        </li>
                                        <br>
                                        <br>
                                        <li style="font-size: 14px">
                                            Call a form of public transportation such as a cab to come pick you up
                                        </li>


                                        <p>
                                            Drowsy driving can be prevented by developing good sleeping habits such as keeping to a sleep schedule and getting adequate sleep (at least 7 hours). Drivers should avoid any medications that cause drowsiness and should not consume alcohol prior to driving.
                                            Under no circumstances should a driver drive drowsy as it is a matter of personal and public safety.
                                        </p>

                                        <p>By accepting below, I acknowledge that I have been made aware of the consequences of driving a motor vehicle sleep deprived or drowsy.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive">
                                        Financial Responsibility
                                    </a>
                                </div>
                                <div id="collapsefive" class="collapse" data-parent="#accordion2" >
                                    <div class="card-body">
                                        <p> In order to better serve you My Home Sleep Testing, LLC requires all patients to sign the financial responsibility please read over the
                                            patient financial policy and sign below to acknowledge: </p>

                                        <div style="font-size: 14px">

                                            <li>
                                                All patients or guardians are responsible for 100% of the charges incurred for treatment at My Home Sleep Testing, LLC.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                The patient or guardian who signs the financial policy statement is the responsible party.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Established patients who have health insurance benefits that have been verified will be expected to pay that portion of the charges not covered under their policy as well as any applicable co-payments under the terms of their policy.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Patients who have health insurance benefits that have been verified will be responsible for all charges, paid in full on the day of service, until their policy out of pocket has been met.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                My Home Sleep Testing, LLC is not responsible for incorrect information given by your insurance company.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Patients who have health insurance benefits that have not been verified will be responsible for any portion of the charges that are not covered, as well as any applicable co-payments under the terms of their policy.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Patients who do not have health insurance benefits will be responsible for all charges incurred, payable on the day of service.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Having an active health insurance policy in no way negates a patient’s responsibility for payment of their medical charges. If these charges are denied or not covered by the patients insurance carrier.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Patients may pay their bills by credit card. Payments can be done on our website: www.mhsleeptesting.com
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                A $98 fee will be required for all consultations and will not be billed to insurance.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Services provided via telemedicine/telehealth may not be covered by all insurance companies.&nbsp; If your insurance company does not cover the telemedicine/telehealth services, you will be responsible for full payment of the services rendered.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                My home sleep test strongly suggests that patients use their insurance for all services covered by their healthcare plan.&nbsp; In the event that the patient chooses to use the self-pay rate rather than processing through the insurance company the patient assumes all responsibility for the services rendered and relinquishes My Home Sleep Testing from any further liability as a result.
                                            </li>


                                        </div>

                                        <p><br>Cancellation Policy:&nbsp; It is not the intent of My Home Sleep Testing, LLC to charge you for a visit that you cannot attend but due to collateral costs that occur as a result of unplanned cancellations we will be obligated to charge a cancellation or no show fee. Therefore we ask you to adhere to our cancellation policy of 48 hours.</p>
                                        <div style="font-size: 14px">

                                            <li>
                                                My Home Sleep Testing, LLC has a 48 hour cancellation policy of $20.00 for ALL regular office visits.
                                                <br>
                                                <br>
                                            </li>
                                            <li>
                                                Cancellation is done only during My Home Sleep Testing, LLC regular office hours of 9:00 am to 5:00 pm. Any cancellations after 5:00 pm will not be honored.
                                            </li>

                                        </div>
                                        <p><br>Patients who fail to pay their outstanding balance within 90 days of the service being provided may be turned over to a collection agency. The patient will still be responsible for the charges as well as all collection agency costs and fees, including reasonable attorney fees.</p>

                                        <p>We ask that you adhere to these policies as part of your financial responsibility. Our staff will assist you in any way that we can. If you have any questions regarding our fees or your insurance coverage and filing of your insurance claims please ask to speak with one of our friendly staff.</p>

                                        <p>I authorize My Home Sleep Testing, LLC to process financial transactions to pay my account balance. I agree to be financially responsible for any and all related charges, if they are not covered by my insurance policy.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapsesix">
                                        Terms and Conditions
                                    </a>
                                </div>
                                <div id="collapsesix" class="collapse" data-parent="#accordion2" >
                                    <div class="card-body">

                                        <div id="text_68" class="form-html" data-component="text">
                                            <p>Terms and Conditions<br> <br> Certification of Identity<br> <br> The patient consents to the fact that they are the person who is attaching the at home sleep testing device to their body. On date of purchase, the patient certifies that they understand it would be fraudulent to claim the patient was taking the test when it was actually taken by another person on their behalf.</p>
                                            <p>The patient also agrees that no one else will have possession of the MHSleepTesting™&nbsp;device while it is in the patient’s care, and the test is therefore an accurate interpretation of the patients sleep patterns.</p>
                                            <p>Acknowledgement of receipt is in effect on date of purchase.<br><br> Consent for Treatment<br> The patient hereby authorizes MHSleepTesting&nbsp;and its affiliated physicians and other medical personnel in charge of my care to conduct medical interview, administer examinations, counseling and treatments in person, over the phone, or over the internet, as may be deemed medically necessary in the exercise of their professional judgment.<br><br>IF YOU NEED TO CANCEL YOUR CONSULTATION APPOINTMENTS, YOU MUST CANCEL WITH 24 HOURS OF THE APPOINTMENT TO AVOID A CANCELLATION FEE OF $20. IF YOU MISS YOUR CONSULTATION APPOINTMENT WITHOUT CONTACTING US IN THE ALLOTTED TIME, YOU WILL BE SUBJECT TO THE $20 CANCELLATION FEE.<br><br>IF WE RECEIVE INSUFFICIENT SLEEP DATA FROM YOU INITIAL SLEEP TEST, DUE TO AN ERROR ON YOUR BEHALF, YOU WILL BE SUBJECT TO A RETEST FEE OF $50. IF IT IS FOUND THAT IT IS A TECHNICAL ISSUE DUE TO THE SLEEP DEVICE, YOU MAY NOT BE SUBJECT TO A RETEST FEE. THIS WILL BE EVALUATED BY OUR SLEEP PROFESSIONALS TO ENSURE YOU RECEIVE THE BEST SERVICE POSSIBLE. PLEASE FOLLOW THE SPECIFIC DIRECTIONS CLOSELY TO MINIMIZE ANY ISSUES WITH YOUR SLEEP TEST.</p>
                                            <p>Acknowledgement of receipt is in effect on date of purchase.<br><br> MHSleepTesting&nbsp;Machine Return Policy<br> The MHSleepTesting&nbsp;machines are very popular. Therefore, it is important that you return your machine within the specified amount of time, two nights after receiving machine, so that the next patient may get tested.<br> To give the patient adequate time to take the test, the patient may keep the MHSleepTesting&nbsp;machine for two nights (48 hours). It is important the patient understands that the machine needs to be returned after that second night (48 hours).&nbsp;</p>
                                            <p>To schedule a pick-up, you must call UPS by midnight the previous night at (800) 742-5877 or schedule a pick-up online at www.UPS.com. Please understand there will be a small fee for UPS to pick up from your residence. However, MHST has inserted a return label in the shipping box so that you can drop off the device at your nearby UPS location free of charge when ready to ship back to us.</p>
                                            <p>*FAILURE TO RETURN THE DEVICE IN THE ALLOTTED TIME PERIOD (24-48 HOURS), WILL RESULT IN A $20/PER DAY LATE CHARGE (EXCLUDING WEEKENDS), TO THE CREDIT CARD ON FILE UNTIL THE DEVICE IS RETURNED.</p>
                                            <p>IF THE DEVICE IS NOT RETURNED WITHIN 30-DAYS FROM THE DATE YOU RECEIVED IT, YOU WILL BE RESPONSIBLE FOR THE COST OF THE SLEEP TESTING DEVICE, WHICH IS $2,500, INCLUDING THE INCURRED LATE CHARGES.</p>
                                            <p>NOTE: YOUR CREDIT CARD ON FILE WILL BE CHARGED THE ABOVE FEES IF THE DEVICE IS NOT RETURNED IN THE ALOTTED TIME GIVEN.</p>
                                            <p>You must make every effort to return the HSAT device within 48 hours so your sleep study test results can be provided within the 5-business day timeframe. If you are needing to have the sleep study device outside the standard 48 hours, please make us aware, as we are more than willing to work with you so that you may complete the sleep study.</p>
                                            <p>*Note: My Home Sleep Testing is NOT a 24-hour service. If you have any questions after hours, please feel free to call our toll free number 1-877- 837-5337 to leave a thorough message and we will address your question/concern immediately the following business day. Be aware that My Home Sleep Testing is NOT an emergency service and in any case of an emergency you should contact 911 immediately for emergency services.</p>
                                            <p>By purchasing the use of our PST machine, the patient accepts and understands this policy. The patient will make every effort to return the machine within 48 hours so we can get the patient/provider the test results within the five-business day timeframe.</p>
                                            <p>Acknowledgement of receipt is in effect on date of purchase.<br><br> MHSLEEPTESTINGTM&nbsp;NOTICE OF PRIVACY PRACTICES THIS NOTICE DESCRIBES HOW YOUR MEDICAL INFORMATION MAY BE USED AND DISCLOSED AND HOW YOU MAY GET ACCESS TO THIS INFORMATION. PLEASE READ IT CAREFULLY.<br><br> MHSleepTesting&nbsp;is dedicated to protecting your medical information. We are required by law to maintain the privacy of protected health information and to provide you with this Notice of our legal duties and privacy practices with respect to protected health information. MHSleepTesting&nbsp;is required by law to abide by the terms of this Notice.</p>
                                            <p>HOW YOUR MEDICAL INFORMATION WILL BE USED AND DISCLOSED:<br> The following describes how MHSleepTesting&nbsp;may use your protected health information for treatment, payment or health care operations.</p>
                                            <p>Treatment:<br> MHSleepTesting&nbsp;may use health information about you to provide you with health care treatment or services. MHSleepTesting&nbsp;may disclose health information about you to doctors, nurses, or other essential personnel who are involved in your care. For example, our office may disclose health information about you to a specialist who has been asked to provide a consultation regarding your care.</p>
                                            <p>Payment:<br> MHSleepTesting&nbsp;may use and disclose health information about you to receive payment for services provided to you. For example, our office may disclose certain information to our health insurance provider in order to receive payment for services provided to you. Under Florida law we must obtain your written consent in order to submit claims for services provided to you. While we do not condition treatment on your signing of our general consent form, failure to sign may force us to decline you as a new patient or discontinue you as an active patient.</p>
                                            <p>Health Care Operations:<br> MHSleepTesting&nbsp;may use and disclose health information about you for operational purposes related to our office. These uses and disclosures are necessary to run our office and make sure that all of our patients receive quality care. For example, MHSleepTesting&nbsp;may use your protected health information in our peer review activities. Such activities are confidential and are designed to assist our office in maintaining a high standard of medical care. We may also use and/or disclose your information in accordance with federal and state laws for the following purposes:</p>
                                            <p>Appointments Reminders.<br> We may contact you to provide appointment reminders.</p>
                                            <p>Treatment Information:<br> We may contact you with information about treatment alternatives or other health related benefits and services that may be of interests to you.</p>
                                            <p>Disclosure to Department of Health and Human Services:<br> We may disclose medical information when required by the United States Department of Health and Human Services as part of an investigation or determination of our compliance with relevant laws.</p>
                                            <p>Family and Friends:<br> Unless you object, we may disclose your medical information to immediate family members or other relatives or close personal friends as authorized by you, when the medical information is directly relevant to that person’s involvement with your care.</p>
                                            <p>Notification:<br> Unless you object, we may use or disclose your medical information to notify a family member, a personal representative or another person responsible for your care of your location, general condition or death.</p>
                                            <p>Disaster Relief:<br> We may disclose your medical information to a public entity, such as the American Red Cross, for the purpose or coordinating with that entity to assist in disaster relief efforts.</p>
                                            <p>Health Oversight Activities:<br> We may disclose your medical information to a health oversight agency for oversight activities authorized by law, including audits, investigations, inspections, licensure or disciplinary actions, administrative and/or legal proceedings.</p>
                                            <p>Abuse or Neglect:<br> We may disclose your medical information when it concerns abuse, neglect or violence to you in accordance with federal and state law.</p>
                                            <p>Judicial and Administrative Proceedings:<br> We may disclose your medical information in the course of certain judicial or administrative proceedings and as required by law.</p>
                                            <p>Law Enforcement:<br> We may disclose your medical information for certain law enforcement purposes as required by law.</p>
                                            <p>Specialized Government Functions:<br> We may disclose medical information as required by law for certain specialized government functions including: certain military and veterans activities, national security and intelligence activities, protective services for the President and others, and correctional institution and law enforcement custodial situations.</p>
                                            <p>Coroners, Medical Examiner’s and Funerals Directors:<br> We may disclose your medical information to a coroner, medical examiner or a funeral director.</p>
                                            <p>Organ Donation:<br> If you are an organ donor, we may disclose your medical information to an organ donation and procurement organization.</p>
                                            <p>Research:<br> We may use or disclose your medical information for certain research purposes if an Institutional authorization, the review is preparatory to research or the research is on only decedent’s information.</p>
                                            <p>Public Health Activities:<br> We may use or disclose your medical information for public health activities, including the reporting of disease, injury, vital events and the conduct of public health surveillance, investigation and/or intervention.</p>
                                            <p>Public Safety:<br> We may use or disclose your medical information to prevent or lessen a serious threat to the health or safety of another person or to the public.</p>
                                            <p>Worker’s compensation:<br> We may disclose your medical information as authorized by laws relating to workers compensation or similar programs.</p>
                                            <p>Business Associates:<br> We may disclose your health information to a business with whom we contact to provide services on our behalf. To protect your health information, we require our business associates with whom we contact to provide services on our behalf. To protect your health information, we require our business associates to appropriately safeguard the health information of our patients.</p>
                                            <p>MINIMUM NECESSARY INCIDENTAL DISCLOSURES AND SUPER CONFIDENTIAL INFORMATION</p>
                                            <p>Our staff will not use or disclose your medical information unless it is necessary to perform their jobs. In other words, access to your medical information will be based on a need to know circumstance. When your medical or payment information is disclosed, only the necessary amount of medical or other information needed to accomplish the recipients lawful purpose will be disclosed. Additionally, while using or disclosing your confidential information we will take every reasonable step to prevent such information from being inadvertently disclosed. Finally, we will follow both state and federal laws related to the use and disclosure of super-confidential information such as HIV/AIDS, alcohol/substance abuse and mental health records.</p>
                                            <p>AUTHORIZATIONS and CONSENTS:</p>
                                            <p>We will not use or disclose your medical information for any other purpose other than treatment, payment or health care operations without your written authorization. Once given, you may revoke your authorization in writing at any time. To request a Revocation of Authorization form you may contact the office’s Privacy Contact, or office manager. Additionally, the time of your first office visit you will be asked to sign a general consent/records release. This consent is required under Florida law in order for our office to submit claims and other information needed to receive for services rendered to you or your family.</p>
                                            <p>YOUR RIGHTS REGARDING YOUR MEDICAL INFORMATION:</p>
                                            <p>You have the following rights with respect to your medial information:<br> You may ask us to restrict certain uses and disclosures for your medical information. We are not required to agree to your request, but if we do we will honor it.</p>
                                            <p>You have the right to receive communications from us in a confidential manner.</p>
                                            <p>Generally, you may inspect and copy your medical information. This right is subject to certain specific exceptions, and you may be charged a reasonable fee for any copies of your records.</p>
                                            <p>You may ask us to amend your medical information. We may deny your request for certain specific reasons. If we deny request, we will provide you with a written explanation for the denial and information regarding further rights you may have at that point.</p>
                                            <p>You have the right to receive an accounting of the disclosures of your medical information made by MHSleepTesting&nbsp;during the last 6 yrs. Except for disclosures for treatment, payment or healthcare operations, disclosures which you authorized and certain other specific disclosure types.</p>
                                            <p>You have the right to complain to us and/or to the United States Department of Health and Human Services if you believe that we have violated your privacy rights. If you choose to file a complaint, you will not be retaliated against in any way. To complain to us, please require at the Registration desk (you will be directed to our Privacy Officer).<br> To file a complaint with the U.S. Department of Health and Human Services you must submit your complaint in writing, within 180 days of the alleged violation to:</p>
                                            <p>Region I.V, Office for Civil Rights<br> U.S. Department of Health and Human Services<br> Atlanta Federal Center, Suite 3B70<br> 61 Forsyth Street, S.W<br> Atlanta, GA 30303-8909<br> Voice phone 404-562-7886</p>
                                            <p>We are required by law to provide you with a copy of our Notice of Privacy Practices, which states how we may use and/or disclose your health information.</p>
                                            <p>Acknowledgement of receipt is in effect on date of purchase.<br> Patient Financial Responsibility<br> 1. All patients or guardians are responsible for 100% of the charges incurred for treatment.</p>
                                            <p>2. The patient or guardian agrees to terms and conditions and the financial policy statement is the responsible party.</p>
                                            <p>3. Patients may pay their bills using PayPal or credit card.</p>
                                            <p>4. A $20.00 per day surcharge will apply if the MHSleepTesting&nbsp;machine is not returned after 48 hours of patient possession. Please follow our return policy to avoid these surcharges, this is personally liable to the patient or guardian.</p>
                                            <p>5. Patients who fail to pay their outstanding balance within 60 days of the date of machine arrival to patient may be turned over to a collection agency. The patient will still be responsible for the charges as well as all collection agency costs and fees, including reasonable attorney fees.</p>
                                            <p>SicknWellTesting&nbsp;has developed these financial policies in an effort to keep the patient’s medical costs down. Printing and mailing statements is an extremely time consuming and expensive undertaking. MHSleepTesting&nbsp;asks that the patient adheres to these policies as part of the patient’s financial responsibility. The staff at MHSleepTesting&nbsp;will assist the patient in any way. If the patient has questions regarding the fees, please ask to speak with one of the team members of the billing department.</p>
                                            <p>Acknowledgement of receipt is in effect on date of purchase.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <label><span class="required">*</span> </label>
                                <div class="row no-gutters">

                                    <label ><input type="checkbox"
                                                   name=" " value="">
                                        I agree and have reviewed the Consent for Treatment Section.
                                    </label>
                                </div>


                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <label><span class="required">*</span> </label>
                                <div class="row no-gutters">

                                    <label ><input type="checkbox"
                                                   name=" " value="">
                                        I acknowledge that I have read and understand the section on Sleep Deprived and Drowsy Driving.
                                    </label>
                                </div>


                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <label><span class="required">*</span> </label>
                                <div class="row no-gutters">

                                    <label ><input type="checkbox"
                                                   name=" " value="">

                                        I agree and accept the Financial Responsibility Section.
                                    </label>
                                </div>


                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <label><span class="required">*</span> </label>
                                <div class="row no-gutters">

                                    <label ><input type="checkbox"
                                                   name=" " value="">

                                        I agree to the Terms & Conditions.
                                    </label>
                                </div>


                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <label>Today's Date<span class="required">*</span></label>
                                    <input type="text" value=""
                                           class="form-control custom-mainforminput dobpicker  "
                                           name="today_date" id="today_date" readonly />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">

                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <label class="" >Signature<span class="required">*</span></label>
                                        <div>
                                            <div  id="sig1"  style="width:380px !Important;height: 200px;" ></div>  <br/>
                                        </div>
                                        <span id="clear1" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                        <textarea id="signature641" name="signed" style="display: none"></textarea>

                                    </div>

                                    <div class="col-12 col-md-3 ">

                                        <div class="padding-wrap">
                                            <label>Type Full Name<span class="required">*</span> </label>
                                            <input type="text" value=""
                                                   class="form-control custom-mainforminput"
                                                   name="type_full_name" id="type_full_name" />
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <label><span class="required">*</span> </label>
                                <div class="row no-gutters">
                                    <label><input type="radio" name=" " value="">
                                        &nbsp; I understand that checking this box constitutes a legal signature confirming that I
                                        acknowledge and warrant the truthfulness of the information provided in these &nbsp;&nbsp;&nbsp;&nbsp;documents
                                    </label>

                                </div>
                                <br>
                                <div class="row no-gutters">
                                    <label><input type="radio" name=" " value="">
                                        &nbsp; Sign me up for continued sleep health tips and updates.</label>
                                </div>


                            </div>
                        </div>

                        <div class="form-section last mb-5">
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Almost Done, Submit & Continue To Last Step"
                                       id="btnSaveSign4"
                                       class="submitbtn nextprevbtn next" style="background: red;" />
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">
                        <div style="text-align: center; font-size: 14pt">
                            <h3 style="color: blue" >STOP BANG - Questionnaire </h3>
                            <span style="color: #808080; font-size: 10pt;">(<strong>S</strong>noring - <strong>T</strong>ired - <strong>O</strong>bserved - <strong>P</strong>ressure - <strong>B</strong>ody - <strong>A</strong>ge - <strong>N</strong>eck - <strong>G</strong>ender)<br><br>
                                <span style="font-size: 12pt;">The test results combined with the information below are necessary to help our
                                    <br>sleep physician make an accurate determination on your sleep study.</span></span>

                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-3">
                                <label>First, Middle Initial, Last<span class="required">*</span></label>
                                <div class="padding-wrap">
                                    <input type="text"
                                           class="form-control custom-mainforminput "
                                           name="first_name_questions" id="first_name_questions"
                                           value="" />
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <label>Email <span class="required">*</span></label>
                                <div class="padding-wrap">
                                    <input type="email"
                                           class="form-control custom-mainforminput "
                                           name="email_question" id="email_question"
                                           value="" />
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <label>Telephone Number <span class="required">*</span></label>
                                <div class="padding-wrap">
                                    <input type="tel"
                                           class="form-control custom-mainforminput "
                                           name="telephone_questions" id="telephone_questions" value=""
                                           data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                </div>
                            </div>

                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <label>Date of birth<span class="required">*</span></label>
                                    <input type="text" value=""
                                           class="form-control custom-mainforminput dobpicker  "
                                           name="dob_question" id="dob_question" readonly />
                                </div>
                            </div>
                        </div>

                        <div data-component="divider" style="border-bottom:1px solid #e6e6e6;">
                        </div>

                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Snoring?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Do you Snore Loudly (loud enough to be heard through closed doors or your bed-partner
                                        elbows you for snoring at night)? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Tired?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Do you often feel Tired, Fatigued, or Sleepy during the daytime (such as falling asleep during driving or talking to someone)? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Observed?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Has anyone Observed you Stop Breathing or Choking/Gasping during your sleep? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Pressure?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Do you have or are being treated for High Blood Pressure? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Body?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Body Mass Index more than 35 kg/m2?</label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Age?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Age older than 50 year old? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Neck?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Neck size large? (Measured around Adams apple) For male, is your neck circumference 17 inches/43 cm or larger? For female, is your neck circumference 16 inches/41 cm or larger? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes"> Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" > No</label>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <div class="col-12 col-md-4">

                                <p><span style="color: #3366ff;"><strong>Gender?</strong></span></p>
                            </div>
                            <div class="form-group row mt-4" >

                                <div class="col-12 col-md-12">

                                    <label>Gender = Male? </label><br />  </div>

                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="yes">  Yes</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="mt-2"><input type="radio"
                                                           name="" value="no" >  No</label>
                            </div>
                        </div>
                        <div id="accordion3" class="custom-accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseseven">
                                        Click Here To See Questionnaire Results
                                    </a>
                                </div>
                                <div id="collapseseven" class="collapse" data-parent="#accordion3">
                                    <div class="card-body">
                                        <div class="form-input-wide">
                                            <div class="form-html">
                                                <label> Questionnaire Score </label>
                                                <div class="form-input-wide">
                                                    <input type="text" data-component="calculation" value="0" size="20">
                                                </div>

                                                <div class="form-input-wide">
                                                    <div class="form-html" data-component="text">
                                                        <p>Scoring Criteria:&nbsp;&nbsp;</p>
                                                        <p>For general population&nbsp;</p>
                                                        <p><strong><span style="color: #339966;">Low Risk of OSA</span></strong>: Yes to 0-2 questions</p>
                                                        <p><strong><span style="color: #ff9900;">Intermediate Risk of OSA</span></strong>: Yes to 3-4 questions</p>
                                                        <p><span style="color: #ff0000;"><strong>High Risk of OSA</strong></span>: Yes to 5-8 questions</p>
                                                        <p>or Yes to 2 or more of 4 STOP questions + male gender</p>
                                                        <p>or Yes to 2 or more of 4 STOP questions + BMI &gt; 35 kg/m2</p>
                                                        <p>or Yes to 2 or more of 4 STOP questions + neck circumference (17”/43cm in male, 16”/41cm in female)</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="form-section last mb-5">
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Click Here To Submit & Finish"
                                       id="signaturebtn"
                                       class="submitbtn" style="background: red;" />
                            </div>
                        </div>



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



<script>
    $(document).ready(function(){
        $("input[type='checkbox']").change(function(){
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