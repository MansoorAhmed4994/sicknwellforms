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
                            <h2 style="text-align: center;">Adult Patient Information</h2>
                        </div>

                        <div class="form-group row mt-2">
                            <div class="col-12 col-md-12">


                                <div class="row no-gutters">
                                    <div class="col-12 col-md-2">
                                        <label>Last Name
                                            <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="last_name" id="last_name" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>First Name <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="first_name" id="first_name" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Middle Initial</label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="middle_initial" id="middle_initial" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Address
                                            <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="Address" id="address" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>City<span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="city" id="city" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>State <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="state" id="state" value="" />
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <div class="row no-gutters">


                                    <div class="col-12 col-md-2">
                                        <label>Zip <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="zip" class="form-control custom-mainforminput " name="zip" id="zip" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <div class="padding-wrap">
                                            <label>Date of birth</label>
                                            <input type="text" value="" class="form-control custom-mainforminput dobpicker  " name="dob" id="dob" readonly />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <label>SSN
                                            <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="ssn" id="ssn" value="" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <label>Sex<span class="required">*</span></label>
                                        <div class="row no-gutters">
                                            <div  class="col-12 col-md-3">
                                                <label style="display: flex" class="mt-2"><input type="radio" name="answer" value="male" checked> Male</label>
                                            </div> &nbsp; &nbsp; &nbsp;
                                            <div class="col-12 col-md-3">
                                                <label style="display: flex" class="mt-2"><input type="radio" name="answer" value="Female"> Female</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Home Phone
                                            <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="tel" class="form-control custom-mainforminput " name="home_tel" id="home_tel" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-2">
                                        <label>Cellphone<span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="tel" class="form-control custom-mainforminput " name="cellphone" id="cellphone" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">
                                <div class="row no-gutters">

                                    <div class="col-12 col-md-2">
                                        <label>Email <span class="required">*</span></label>
                                        <div class="padding-wrap">
                                            <input type="email" class="form-control custom-mainforminput " name="email" id="email" value="" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Race
                                        </label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="Race" id="Race" value="" />
                                            <p><small>optional</small></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Ethnicity</label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="Ethnicity" id="Ethnicity" value="" />
                                            <p><small>optional</small></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Language </label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="Language" id="Language" value="" />
                                            <p><small>optional</small></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Employer
                                        </label>
                                        <div class="padding-wrap">
                                            <input type="text" class="form-control custom-mainforminput " name="Employer" id="Employer" value="" />

                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label>Phone
                                        </label>
                                        <div class="padding-wrap">
                                            <input type="tel" class="form-control custom-mainforminput " name="phone" id="Phone" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />

                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        {{--          <div class="form-group row mt-4">
                                    <div class="col-12 col-md-12">
                                        <div class="row no-gutters">



                                        </div>
                                    </div>
                                </div>--}}

                        <div class="form-group row mt-4">
                            <div class="col-12 col-md-12">


                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <label class="mt-2"><input type="radio" name="ans" value="Single" > Single</label>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <label class="mt-2"><input type="radio" name="ans" value="Married"> Married</label>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <label class="mt-2"><input type="radio" name="ans" value="Divorced"> Divorced</label>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <label class="mt-2"><input type="radio" name="ans" value="Widowed" > Widowed</label>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <label class="mt-2"><input type="radio" name="answer" value="Separated"> Separated</label>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <label class="mt-2"><input type="radio" name="answer" value="Life Partner"> Life Partner</label>
                                    </div>
                                </div>

                            </div>
                        </div>



                        {{--         <div class="form-group row mt-4">
                                    <div class="col-12 col-md-12">
                                        <div class="row no-gutters">


                                        </div>
                                    </div>
                                </div>--}}
                        <hr>

                        <div class="form-section">
                            <div class="top-section">
                                <h2 style="text-align: center;">Emergency Contact</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Name_1" id="Name_1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Home Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Home Phone_1" id="Home Phone_1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Cell Phone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Cell Phone_1" id="Cell Phone_1" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label>Relation to Patient </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Relation to Patient_1" id="Relation to Patient_1" value="" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Name_2" id="Name_2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Home Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Home Phone_2" id="Home Phone_2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Cell Phone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Cell Phone_2" id="Cell Phone_2" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label>Relation to Patient </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Relation to Patient_2" id="Relation to Patient_2" value="" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-section">
                            <div class="top-section">
                                <h2 style="text-align: center;">Insurance Information</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Insurance Company<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="text" class="form-control custom-mainforminput " name="Insurance Company " id="Insurance Company " value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Policy Number <span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="tel" class="form-control custom-mainforminput " name="Policy Number" id="Policy Number " value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Group Number<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="tel" class="form-control custom-mainforminput " name="Group Number " id="Group Number" value="" />
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Policy Holder First Name<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="text" class="form-control custom-mainforminput " name="Policy Holder First Name " id="Policy Holder First Name" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Last Name<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="tel" class="form-control custom-mainforminput " name="Policy Holder Last Name" id="Policy Holder Last Name" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Date of Birth <span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="text" class="form-control custom-mainforminput dobpicker  " name="Date of Birth  " id="Date of Birth " value="" />
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label> Secondary Insurance Company</label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="text" class="form-control custom-mainforminput " name="Insurance Company_2 " id="Insurance Company_2 " value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Policy Number</label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="tel" class="form-control custom-mainforminput " name="Policy Number" id="Policy Number_2 " value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Group Number</label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="tel" class="form-control custom-mainforminput " name="Group Number " id="Group Number_2" value="" />
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4">
                                            <label>Policy Holder First Name</label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="text" class="form-control custom-mainforminput " name="Policy Holder First Name " id="Policy Holder First Name_2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Last Name</label>
                                            <div class="padding-wrap">
                                                <input  placeholder="" type="tel" class="form-control custom-mainforminput " name="Policy Holder Last Name" id="Policy Holder Last Name_2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Date of Birth</label>
                                            <div class="padding-wrap">
                                                <input placeholder="" type="text" class="form-control custom-mainforminput dobpicker  " name="Date of Birth  " id="Date of Birth_2 " value="" />
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>



                        <div class="form-section last mb-5">
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Next" id="btnSaveSign0" class="submitbtn nextprevbtn next" style="background: red;" />
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec ">


                        <div class="form-section">
                            <div class="top-section">
                                <h2 style="text-align: center;">Adult Health History</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-8">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Occupation</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Occupation" id="Occupation" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Highest Level of Education</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Education" id="Education" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label>Reason for Visit</label>
                                            <div class="padding-wrap">
                                                <textarea class="form-control custom-mainforminput " rows="4" name="message" id="message"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-section">
                            <div class="top-section">
                                <h2 style="text-align: center;">Hospitalizations</h2>
                            </div>

                            <div style="align-items: center; display: block; margin-top: 10px;" class="form-html" data-component="text">
                                <p style="text-align: center;"><span style="font-size: 14pt;"><strong>Hospitalizations:</strong> </span><span style="font-size: 12pt;">State year, facility followed by illness or operation (Most recent first)</span></p>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Reason</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="1" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Reason</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="2" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_3" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_3" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Reason</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="3" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_4" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_4" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Reason</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="4" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_5" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_5" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Reason</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="5" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_6" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_6" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Reason</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="6" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-html">
                                <p style="text-align: center;"><span style="font-size: 12pt;"><span style="font-size: 14pt;"><strong>Surgeries:</strong></span> State year, facility followed by illness or operation (Most recent first)</span></p>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_s1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_s1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Surgery/Procedure</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="s1" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_s2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_s2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Surgery/Procedure</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="s2" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_s3" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_s3" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Surgery/Procedure</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="s3" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_s4" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_s4" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Surgery/Procedure</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="s4" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_s5" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_s5" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Surgery/Procedure</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="s5" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Year</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="Year" id="year_s6" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Name of Facility</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Name of Facility" id="Nof_s6" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Surgery/Procedure</label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="Reason" id="s6" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="form-section last mb-5">


                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign11" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign1" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">
                        <div class="form-html">
                            <p style="text-align: center;"><span style="font-size: 12pt;"><span style="font-size: 14pt;"><strong>Past Medical and Familial History:</strong></span> (Please check if you or any BLOOD relative has these conditions)</span></p>
                        </div>
                        <div class="form-section">

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label>Check that all apply</label>


                                    <div class="row">
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Eczema"> Eczema</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Upper Respiratory Infection"> Upper Respiratory Infection</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Asthma"> Asthma</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Sinus Problems"> Sinus Problems</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Emphysema"> Emphysema</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Eczema</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Upper Respiratory Infection</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Asthma</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Sinus Problems</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Emphysema</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Recent Weight Loss</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Migraine Headaches</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Epilepsy/Convulsions</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Eye Disease</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Heart Disease</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>COPD/Emphysema</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Seizure Disorder</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Sleep Apnea</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Parkinson’s Disease</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Fibromyalgia</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Gout</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Thyroid Disease</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Insomnia</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Lupus</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Diabetes Mellitus</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Chronic Pain</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Depression</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Bowel Issues</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Kidney/Bladder Problem</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Neurological</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Arthritis</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Osteoporosis</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Stroke/TIA
                                            </label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>High Cholesterol</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Coronary Artery Disease</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Hypertension</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Benign Prostatic Hyperplasia (BPH)</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Hiatal Hernia</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Pulmonary Embolism</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Gastro Esophageal Reflux</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Restless Leg Syndrome</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Anemia</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Head Trauma</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Liver Disease</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Hepatitis</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Respiratory Failure</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Psoriasis/Eczema</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Memory Loss</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> You</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Cancer</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="You"> You</label>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Relative"> Relative</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <label>Cancer Type</label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">

                                    <label>Please list any other illness that you have been diagnosed with:</label>
                                    <div class="padding-wrap">
                                        <textarea class="form-control custom-mainforminput " rows="4" name="illenessdetails" id="illenessdetails"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;"> Family History</h2>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Age of Death</label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker  " name="aod" id="aod" readonly />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Cause of Death
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="cod" id="cod" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Mother</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="male"> Alive</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Female"> Deceased</label>
                                                </div>
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
                                                <label>Age of Death</label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker  " name="aod" id="aod1" readonly />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Cause of Death
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="cod" id="cod1" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Father</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="male"> Alive</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Female"> Deceased</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-section last mb-5">


                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign12" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign2" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">

                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;"> Pharmacy</h2>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <div class="padding-wrap">
                                                <label>Pharmacy Name</label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="pm" id="Pharmacy Name_1" readonly />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label>City/Town
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="ct" id="City/Town_1" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <div class="padding-wrap">
                                                <label>Pharmacy Name</label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="pm" id="Pharmacy Name_2" readonly />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label>City/Town
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="ct" id="City/Town_2" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;">Social History</h2>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Do you drink caffeine?</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="male"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Female"> No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5">
                                            <div class="padding-wrap">
                                                <label>How many caffeinated beverages are consumed per day?</label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="cb" readonly />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Tobacco Use?</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Quit"> Quit</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>How many Daily?</label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="daily" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>For how many years?
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="years" value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>When did you stop?
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="stop" value="" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Recreational Drug Use?</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Quit"> Quit</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>What drugs?</label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="drug" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label>When?
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="when" value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Alcohol Use ?</label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Quit"> Quit</label>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;"> Last Time You Had</h2>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Flu Vaccine
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="Flu Vaccine" readonly />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Eye Exam
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Eye Exam" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Pneumonia Shot

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Pneumonia Shot" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Tetanus Shot

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Tetanus Shot" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Colonoscopy

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Colonoscopy" value="" />
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
                                                <label>Dental Exam
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="Dental Exam" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>T.B. Test
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="T.B. Test" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Stool Blood Test

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Stool Blood Test" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Rectal Exam

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Rectal Exam" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section last mb-5">




                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign13" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign3" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>

                        </div>
                    </div>

                    <div class="wizard-sec ">


                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;">Medications</h2>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="Medication1" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency1" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason1" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="Medication2" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency2" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason2" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="Medication3" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose3" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency3" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason3" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="Medication4" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose4" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency4" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason4" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker  " name="" id="Medication5" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose5" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency5" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason5" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput  " name="" id="Medication6" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose6" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency6" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason6" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput  " name="" id="Medication7" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose7" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency7" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason7" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="Medication8" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose8" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency8" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason8" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput  " name="" id="Medication9" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose9" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency9" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason9" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Medication
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="Medication10" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Dose
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Dose10" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Frequency

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Frequency10" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Reason
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="Reason10" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;">Men Only</h2>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Date of Prostate Exam
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="Date of Prostate Exam" />
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-section">

                            <div class="top-section">
                                <h2 style="text-align: center;">Women Only</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Regular?</label>
                                            <div class="row no-gutters ">
                                                <div class="col-12 col-md-3">
                                                    <label style="display: flex"  class="mt-2"><input  type="radio" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label style="display: flex"  class="mt-2"><input style="display: flex" type="radio" name="answer" value="No"> No</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Spotting?</label>
                                            <div class="row no-gutters ">
                                                <div class="col-12 col-md-3">
                                                    <label style="display: flex" class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label style="display: flex" class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                                </div>

                                            </div>
                                        </div>



                                        <div class="col-12 col-md-2">
                                            <label>Birth Control?</label>
                                            <div class="row no-gutters ">
                                                <div class="col-12 col-md-3">
                                                    <label style="display: flex" class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label style="display: flex" class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">

                                            <label>Name/Type of Birth Control
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="bcontrol" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Date of last Period
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="period" />
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
                                                <label>Number of Pregnancies
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput" name="" id="nop" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Number of Births
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="nob" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Number of Miscarriages


                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="nom" value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Number of Abortions

                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput " name="" id="noa" value="" />
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">

                                    <h2 style="text-align: center;">Most Recent</h2>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Date of last Pap
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker" name="" id="dp" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Pap</label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Normal"> Normal</label>
                                                </div>
                                                &nbsp;  &nbsp;
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Abormal"> Abnormal</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Date of Breast Exam
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput dobpicker" name="" id="db" value="" />
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-2">
                                            <label>Breast Exam</label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Normal"> Normal</label>
                                                </div>
                                                &nbsp;  &nbsp;
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Abormal"> Abnormal</label>
                                                </div>

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
                                                <label>Date of last Mammogram
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker" name="" id="dlm" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Mammogram</label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Normal"> Normal</label>
                                                </div>
                                                &nbsp;  &nbsp;
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Abormal"> Abnormal</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Date of Bone Density
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" class="form-control custom-mainforminput dobpicker " name="" id="dd" value="" />
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-2">
                                            <label>Bone Density</label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Normal"> Normal</label>
                                                </div>
                                                &nbsp;  &nbsp;
                                                <div class="col-12 col-md-4">
                                                    <label style="display: flex;" class="mt-2"><input type="radio" name="answer" value="Abormal"> Abnormal</label>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label>Additional Comments</label>
                                            <div class="padding-wrap">
                                                <textarea class="form-control custom-mainforminput " rows="4" name="additionalcom" id=""></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-section last mb-5">



                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign14" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign4" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">
                        <div class="top-section">
                            <h2 style="text-align: center;">Sleep Screening</h2>
                        </div>
                        <div class="form-section">

                            <h2 style="text-align: center;">Stop Bang Questionaire</h2>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-6">
                                            <label>SNORING- Do you snore loudly (louder than talking)?</label>

                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>TIRED- Do you often feel tired, fatigued or sleepy?</label>

                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-6">
                                            <label>OBSERVED- Has anyone observed you stop breathing?</label>

                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>PRESSURE- Do you have/being treated for high BP?</label>

                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">




                                        <div class="col-12 col-md-6">
                                            <label>NECK- Neck circumference >17” or 16” for women?</label>

                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label  class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>



                                        <div class="col-12 col-md-6">
                                            <label>BODY- BMI more than 35kg?</label>

                                            <div class="col-12 col-md-2">
                                                <label  class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label  class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-6">
                                            <label>GENDER- gender male?</label>

                                            <div class="col-12 col-md-2">
                                                <label  class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>AGE- Age over 50 years old?</label>

                                            <div class="col-12 col-md-2">
                                                <label  class="mt-2"><input type="radio" name="answer" value="Yes"> Yes</label>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <label  class="mt-2"><input type="radio" name="answer" value="No"> No</label>
                                            </div>


                                        </div>


                                    </div>
                                </div>


                            </div>

                            <h2 style="text-align: center;">Epworth Scale</h2>

                            <div class="form-html">
                                <p><span style="font-size: 12pt; font-weight: bold"><strong>How much do you doze off?</strong></span><br>0 = Would Never Doze&nbsp; &nbsp;|&nbsp; &nbsp;1 = Slight Chance of Dozing&nbsp; | &nbsp;2 = Moderate Chance of Dozing&nbsp; | 3 = High Chance of Dozing</p>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4">
                                            <label>Watching T.V.</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-12 col-md-4">
                                            <label>Sitting and Reading</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4">
                                            <label>Sitting inactive in a public place (i.e. theatre)</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-12 col-md-4">
                                            <label>As a passenger in a car for an hour w/out a break</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4">
                                            <label>Lying down to rest in the afternoon</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-12 col-md-4">
                                            <label>Sitting and talking to someone</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4">
                                            <label>Sitting quietly after lunch without alcohol</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-12 col-md-4">
                                            <label>In a car while stopped for a few min. in traffic</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3</label>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="form-section last mb-5">

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign15" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign5" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">


                        <div class="top-section">
                            <h2 style="text-align: center;">Depression Screening</h2>
                        </div>
                        <div class="form-section">

                            <p>Over the last 2 weeks, how often have you been bothered by any of the following problems?</p>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label>Little interest or plesure in doing things</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>




                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label> Feeling down, depressed, or hopeless</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label> Trouble falling or staying asleep, or sleeping to much</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label> Feeling tired or having little energy</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>




                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label> Poor appetite or overeating</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>




                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label>Feeling bad about yourself or that you are a failure, or have let yourself or your family down</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label>Trouble concentrating on things, such as reading the newspaper or watching television
                                            </label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label>Moving or speaking so slowly that other people could have noticed; or the opposite, being so fidgety or restless that you have been moving around a lot more than usual</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>




                                    </div>
                                </div>


                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-12">
                                            <label>Thoughts that you would be better off dead or of hurting yourself in some way</label>
                                            <div class="row">
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="0"> 0 - Not at all</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="1"> 1 - Several Days</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="2"> 2 - More than half the days</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="radio" name="answer" value="3"> 3 - Nearly every day</label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="form-section last mb-5">
                            <!--
                                                        <div class="d-flex justify-content-left">
                                                            <input type="submit" value="Back"
                                                                   id="btnSaveSign16"
                                                                   class="submitbtn nextprevbtn back" style="background: red;" />
                                                        </div>

                                                        <div class="d-flex justify-content-center">
                                                            <input type="submit" value="Next"
                                                                   id="btnSaveSign6"
                                                                   class="submitbtn nextprevbtn next" style="background: red;" />
                                                        </div>-->


                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign16" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign6" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>

                        </div>
                    </div>
                    <div class="wizard-sec">

                        <div class="top-section">
                            <h2 style="text-align: center;">Allergy Questionnaire</h2>
                        </div>
                        <div class="form-section">
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label> Allergies</label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="checkbox" name="answer" value="Yes, I have allergies"> Yes, I have allergies</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="checkbox" name="answer" value="No Known Drug Allergies"> No Known Drug Allergies</label>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="checkbox" name="answer" value="Yes, I have allergies"> Medication Allergies</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="checkbox" name="answer" value="No Known Drug Allergies"> Environmental Allergies</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label> Allergies</label>
                                            <div class="padding-wrap">
                                                <textarea class="form-control custom-mainforminput " rows="4" name="allergies"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label> Do you have any of these symptoms? (Please check)</label>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Cough"> Cough</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Wheezing"> Wheezing</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Shortness of Breath"> Shortness of Breath</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Chest tightness"> Chest tightness</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Sneezing"> Sneezing</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Runny Nose"> Runny Nose</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Nasal Congestion"> Nasal Congestion</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Itchy Nose"> Itchy Nose</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Itchy/Watery Eyes"> Itchy/Watery Eyes</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Postnasal Drip"> Postnasal Drip</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Nasal Polyps"> Nasal Polyps</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Poor Sense of Smell"> Poor Sense of Smell</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Ear Infections"> Ear Infections</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Sinus Infections"> Sinus Infections</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Blocked Ears"> Blocked Ears</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Eczema"> Eczema</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Hives/Swelling"> Hives/Swelling</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Headaches"> Headaches</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Snoring"> Snoring</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Fatigue"> Fatigue</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Phlegm/Sputum"> Phlegm/Sputum</label>
                                        </div>


                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Color
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="color" />
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="padding-wrap">
                                        <label>Other
                                        </label>
                                        <input type="text" value="" class="form-control custom-mainforminput " name="" id="other" />
                                    </div>
                                </div>
                            </div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label> Check any of the following which seem to trigger (or cause) symptoms or bother you:</label>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Grass"> Grass</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Hay"> Hay</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Mold and Mildew"> Mold and Mildew</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Basements"> Basements</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Leaves"> Leaves</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value=" Cats"> Cats</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Dogs"> Dogs</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Horses"> Horses</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Other animals"> Other animals</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Alcoholic Beverages "> Alcoholic Beverages</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value=" Cosmetics"> Cosmetics</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value=" Perfumes"> Perfumes</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Insecticides"> Insecticides</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Odors"> Odors</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Exercise"> Exercise</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Drafts"> Drafts</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Aerosol sprays"> Aerosol sprays</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Smoke"> Smoke</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Pollution"> Pollution</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Latex (rubber)"> Latex (rubber)</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="House dust">House dust</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Humidity"> Humidity</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Weather changes"> Weather changes</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Nervousness"> Nervousness</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Cold Air"> Cold Air</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label class="mt-2"><input type="checkbox" name="answer" value="Trees"> Trees</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="padding-wrap">
                                        <label>Other
                                        </label>
                                        <input type="text" value="" class="form-control custom-mainforminput " name="" id="other2" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>When are your symptoms worse?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-4">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Year Round"> Year Round</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Seasonal"> Seasonal</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Are symptoms better away from home?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Year Round"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Seasonal"> No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>If yes, when?
                                                </label>
                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="swhen" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label> What type of pillows do you have?</label>

                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="pillow" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label> What type of comforter do you have?</label>

                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="comforter" />

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <label> What type of floor covering do you have in your bedroom?</label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="checkbox" name="answer" value="Hard surface"> Hard surface</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="checkbox" name="answer" value="Carpeting"> Carpeting</label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="padding-wrap">
                                                <label> Other Floor Covering</label>

                                                <textarea class="form-control custom-mainforminput " rows="4" name="covering"></textarea>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <div class="padding-wrap">
                                                <label> How old is your mattress?</label>

                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="old" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="padding-wrap">
                                                <label> What is in your mattress?(i.e. cotton/horse hair)?</label>

                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="mattress" />

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <label>Do you have air conditioning?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="No"> No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>If yes</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-4">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Window Unit"> Window Unit</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Central"> Central</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <label>Do you have problems with roaches or mice?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="No"> No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label>Do you have water leaks, mold contamination?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="No"> No</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">


                                        <div class="col-12 col-md-6">
                                            <label>Is your home/apartment excessively humid?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="Yes"> Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="checkbox" name="answer" value="No"> No</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>








                        </div>

                        <div class="form-section last mb-5">

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="btnSaveSign17" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="btnSaveSign7" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-sec">

                        <div class="top-section">
                            <h2 style="text-align: center;">Authorization To Release My Medical Care</h2>
                        </div>
                        <div class="form-section">

                            <p>I "Patient Name", give Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare permission to discuss my medical care and account information with the following person(s):</p>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="name1" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="relation1" />

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="telephone1" id="telephone" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="name2" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="relation2" />

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="telephone2" id="telephone2" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="name3" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="relation3" />

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="telephone3" id="telephone3" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="name4" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="relation4" />

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="telephone4" id="telephone4" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="name5" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="relation5" />

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel" class="form-control custom-mainforminput " name="telephone5" id="telephone5" value="" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <p>
                                I "Patient Name", hereby authorize Pediatric and Internal Medicine Specialists, Inc, it’s affiliated physicians and other medical personnel in charge of my care to administer examinations, immunizations, treatments and view my prescription history from an external source and telemedicine services as needed or requested by the patient that may be deemed medically necessary in the exercise of their professional judgment. Additionally, by signing this form I acknowledge that I have received a copy of the Privacy Policies and Financial Responsibility Policy for the office of Pediatric and Internal Medicine Specialists, Inc.
                            </p>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-4">
                                            <label class="" for="">Patient Signature</label>
                                            <div>
                                                <div  id="sig"  style="width:383px !Important;height: 200px;" ></div>  <br/>
                                            </div>

                                            <span id="clear" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature64" name="signed" style="display: none"></textarea>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="col-12 col-md-2">
                                                <label>Name:</label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label>Date of Birth:</label>
                                            </div>

                                        </div>


                                        <div class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker  " name="todate" id="todate" readonly />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="form-html">
                                <p style="text-align: center;"><span style="font-size: 12pt;">Almost Done! Click the <strong><span style="color: #ff6600;">Next Button</span></strong> to get to the last page.</span></p>
                            </div>




                        </div>

                        <div class="form-section last mb-5">

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" id="" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Next" id="" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>

                        </div>
                    </div>
                    <div class="wizard-sec">

                        <div class="form-section">
                            <div id="accordion2" class="custom-accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                            Click here to review Patient Financial Responsibility
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion2">
                                        <div class="card-body">
                                            <div class="form-input-wide">
                                                <div class="form-section">
                                                    <hr>
                                                    <h2 style="text-align: center;"> Patient Financial Responsibility</h2>

                                                </div>
                                                <div class="form-html">

                                                    <p>All patients or guardians are responsible for 100% of the charges incurred for treatment at Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine). The patient or guardian who signs the financial policy statement is the responsible party.·&nbsp; &nbsp;Established patients who have health insurance benefits that have been verified will be expected to pay that portion of the charges not covered under their policy as well as any applicable co-payments under the terms of their policy.</p>

                                                    <li style="font-size: 14px">
                                                        Patients who have health insurance benefits that have been verified will be responsible for all charges, paid in full on the day of service, until their policy out of pocket has been met.
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) are not responsible for incorrect information given by your insurance compan
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        Patients who have health insurance benefits that have not been verified will be responsible for any portion of the charge that are not covered, as well as any applicable co-payments under the terms of their policy.
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        Patients who do not have health insurance will be responsible for all charges incurred payable on the day of service.
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        Having an active health insurance policy in no way negates a patient’s responsibility for payment of their medical charges, if these charges are denied or not covered by the patient’s insurance carrier.
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        Patients may pay their bills by cash, check, or credit.
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        There will be a $20.00 charge applied to your account for patients who do not keep their appointments, including no-shows.
                                                        <br>
                                                        <br>
                                                    </li>
                                                    <li style="font-size: 14px">
                                                        Patients who fail to pay their outstanding balance within 90 days of the service being provided may be turned over to a collection agency. The patient will still be responsible for the charges as well as all collection agency costs and fees, including reasonable attorney fees.
                                                    </li>

                                                    <p>Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) utilize Transaction Central, Patient Payment Assurance to securely maintain your payment information in compliance with federal and state laws.</p>
                                                    <p>Your payment information filed with Transaction central will be saved for future processing of patient responsible portions not paid by insurance; miscellaneous healthcare fees such as but not limited to late, cancelled or missed appointments.</p>
                                                    <p>We have developed these financial policies in an effort to keep your medical costs down. Printing and mailing statements is an extremely time consuming and expensive undertaking. We ask that you adhere to these policies as part of your financial responsibility. Our staff will assist you in any way that we can. If you have any questions regarding our fees or your insurance coverage and filing of your insurance claims please ask to speak with one of the members of our billing and insurance department. Billing Department: (352) 563-0931.</p>
                                                    <p>I authorize Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) to process financial transactions to pay my account balance. I agree to be financially responsible for any and all related charges, if they are not covered by my insurance policy.</p>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour">
                                            Click here to review Notice of Privacy Practices
                                        </a>
                                    </div>
                                    <div id="collapsefour" class="collapse" data-parent="#accordion2">
                                        <div class="card-body">
                                            <div class="form-section">
                                                <hr>
                                                <h2 style="text-align: center;"> Notice of Privacy Practices</h2>

                                            </div>
                                            <div class="form-html">


                                                <p>THIS NOTICE DESCRIBES HOW MEDICAL INFORMATION ABOUT YOU MAY BE USED AND DISCLOSED AND HOW YOU MAY GET ACCESS TO THIS INFORMATION. PLEASE READ IT CAREFULLY.</p>
                                                <p>Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) are dedicated to protecting your medical information. We are required by law to maintain the privacy of protected health information and to provide you with this Notice of our legal duties and privacy practices with respect to protected health information. PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) are required by law to abide by the terms of this Notice.</p>
                                                <p>&nbsp;</p>
                                                <p>HOW YOUR MEDICAL INFORMATION WILL BE USED AND DISCLOSED:</p>
                                                <p>The following describes how Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) may use your protected health information for treatment, payment or health care operations.</p>
                                                <p>&nbsp;</p>
                                                <p>Treatment: Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) may use health information about you to provide you with health care treatment or services. Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) may disclose health information about you to doctors, nurses, or other essential personnel who are involved in your care.</p>
                                                <p>Payment: Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) may use and disclose health information about you to receive payment for services provided to you. Under Florida law we must obtain your written consent in order to submit claims for services provided to you. Failure to sign may force us to decline you as a new patient or discontinue you as an active patient.</p>
                                                <p>Health Care Operations: &nbsp;Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) may use and disclose health information about you for operational purposes related to our office. We may also and/or disclose your information in accordance with federal and state laws for the following purposes:</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive">
                                            Click here to review the Patients Rights Regarding Their Medical Information
                                        </a>
                                    </div>
                                    <div id="collapsefive" class="collapse" data-parent="#accordion2">
                                        <div class="card-body">

                                            <div class="form-section">
                                                <hr>
                                                <h2 style="text-align: center;"> Patients Rights Regarding Their Medical Information</h2>

                                            </div>
                                            <br>
                                            <br>

                                            <li style="font-size: 14px">
                                                You may ask us to restrict certain uses and disclosures for your medical information. We are not required to agree to your request, but if we do we will honor it.
                                            </li>
                                            <br>
                                            <br>
                                            <li style="font-size: 14px">
                                                You have the right to receive communications from us in a confidential manner.
                                            </li>
                                            <br>
                                            <br>
                                            <li style="font-size: 14px">
                                                Generally, you may inspect and copy your medical information. This right is subject to certain specific exceptions, and you may be charged a reasonable fee for any copies of your records.
                                            </li>
                                            <br>
                                            <br>
                                            <li style="font-size: 14px">
                                                You may ask us to amend your medical information. We may deny your request for certain specific reasons. If we deny request, we will provide you with a written explanation for the denial and information regarding further rights you may have at that point.
                                            </li>
                                            <br>
                                            <br>
                                            <li style="font-size: 14px">
                                                You have the right to receive an accounting of the disclosures of your medical information made by Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) during the last 6 years. Except for disclosures for treatment, payment or healthcare operations, disclosures which you authorized and certain other specific disclosure types.&nbsp;
                                            </li>
                                            <br>
                                            <br>
                                            <li style="font-size: 14px">
                                                You have the right to complain to us and/or to the United States Department of Health and Human Services if you believe that we have violated your privacy rights. If you choose to file a complaint, you will not be retaliated against in any way. To complain to us, please require at the Registration desk (you will be directed to our Privacy Officer).
                                            </li>
                                            <br>
                                            <br>
                                            <li style="font-size: 14px">
                                                To file a complaint with the U.S. Department of Health and Human Services you must submit your complaint in writing, within 180 of the alleged violation to:
                                                <br>
                                                &nbsp;
                                            </li>

                                            <p style="text-align: center;">Region I.V, Office for Civil Rights</p>
                                            <p style="text-align: center;">U.S. Department of Health and Human Services</p>
                                            <p style="text-align: center;">Atlanta Federal Center, Suite 3B70</p>
                                            <p style="text-align: center;">61 Forsyth Street, S.W</p>
                                            <p style="text-align: center;">Atlanta, GA 30303-8909</p>
                                            <p style="text-align: center;">Voice phone 404-562-7886</p>
                                            <p style="text-align: center;">Fax 404-562-7881</p>
                                            <p>&nbsp;</p>
                                            <p>*For the full version of Pediatric and Internal Medicine Specialists Inc. DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well’s (telemedicine) privacy policy, view our website at www.pedimhealthcare.com</p>




                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">

                                    <div class="row no-gutters">


                                        <div class="col-12 col-md-4">
                                            <label class="" for="">Patient Signature</label>
                                            <div>
                                                <div  id="sig2"  style="width:383px !Important;height: 200px;" ></div>  <br/>
                                            </div>

                                            <span id="clear2" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature642" name="signed2" style="display: none"></textarea>

                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="col-12 col-md-2">
                                                <label>Name:</label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label>Date of Birth:</label>
                                            </div>

                                        </div>


                                        <div class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value="" class="form-control custom-mainforminput dobpicker  " name="todate" id="todate2" readonly />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Full name of signatory</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="fullname" />

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label> Relationship to Patient</label>
                                            <div class="padding-wrap">


                                                <input type="text" value="" class="form-control custom-mainforminput " name="" id="relation_patient" />

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="form-html">
                                <p style="text-align: center;"><span style="font-size: 12pt;">Thank you for taking the time! Click the <strong><span style="color: #ff6600;">Submit Button</span></strong> to Finish.</span></p>
                            </div>

                        </div>

                        <div class="form-section last mb-5">


                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input type="submit" value="Back" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input type="submit" value="Submit" id="signaturebtn2" class="submitbtn " style="background: red;  margin-left: 5px"></div>
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
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});

    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });


    var sig2 = $('#sig2').signature({syncField: '#signature642', syncFormat: 'PNG'});

    $('#clear2').click(function(e) {
        e.preventDefault();
        sig2.signature('clear');
        $("#signature642").val('');
    });



    $('#signaturebtn').on('click', function(e)
    {
        var signature = jQuery("#signature64").val();
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

    $('#signaturebtn').on('click', function(e)
    {
        var signature = jQuery("#signature642").val();
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