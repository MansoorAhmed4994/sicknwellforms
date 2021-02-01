
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


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/signature/jquery.signature.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/signature/jquery.signature.css') }}">


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

                    <div class="wizard-sec active">
<div class="top-section">
                                <h2 style="text-align: center;">Pediatric Patient Information</h2> </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">


                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Last Name
                                                <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="last_name" id="last_name"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>First Name <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="first_name" id="first_name"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Middle Initial</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="middle_initial" id="middle_initial"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Address
                                                <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Address" id="address"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>City<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="city" id="city"
                                                       value="" />
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


                                    </div>

                                </div>

                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label>Zip <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="zip"
                                                       class="form-control custom-mainforminput "
                                                       name="zip" id="zip" value=""
                                                />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Race
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Race" id="Race"
                                                       value="" />
                                                <p><small>optional</small></p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Ethnicity</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Ethnicity" id="Ethnicity"
                                                       value="" />
                                                <p><small>optional</small></p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>School </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="school" id="school"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Date of birth</label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput dobpicker  "
                                                       name="dob" id="dob" readonly />
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-2">
                                            <label>Sex<span class="required">*</span></label>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="male" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="mt-2"><input type="radio" name="answer" value="Female" > No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<hr>


                            <div class="top-section">
                                <h2 style="text-align: center;">Guarantor Information</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                            <div class="col-12 col-md-2">
                                                <label>Parent Last Name <span class="required">*</span> </label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput "
                                                           name="p_last_name" id="p_last_name"
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-2">
                                                <label>First Name<span class="required">*</span> </label>
                                                <div class="padding-wrap">
                                                    <input type="tel"
                                                           class="form-control custom-mainforminput "
                                                           name="first_name" id="first_name"
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-2">
                                                <label>DOB<span class="required">*</span>  </label>
                                                <div class="padding-wrap">
                                                    <input type="tel"
                                                           class="form-control custom-mainforminput dobpicker "
                                                           name="DOB_p" id="DOB_p"
                                                           value="" readonly />
                                                </div>
                                            </div>
                                        <div class="col-12 col-md-2">
                                            <label>City<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="city" id="city_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Address<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Address" id="address_1"
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
                                            <label>State <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="state" id="state_1"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Zip <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="zip"
                                                       class="form-control custom-mainforminput "
                                                       name="zip" id="zip_1" value=""
                                                />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Home Phone
                                                <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="home_tel" id="home_tel"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Cellphone<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="cellphone" id="cellphone"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Employer <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="employer" id="employer"
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
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Parent Last Name <span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="p_last_name" id="p_last_name_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>First Name<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="first_name" id="first_name_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>DOB<span class="required">*</span>  </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput dobpicker "
                                                       name="DOB_p" id="DOB_p_1"
                                                       value="" readonly />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>City<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="city" id="city_1"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label>Address<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Address" id="address_1"
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
                                            <label>State <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="state" id="state_1"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Zip <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="zip"
                                                       class="form-control custom-mainforminput "
                                                       name="zip" id="zip_1" value=""/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Home Phone
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="home_tel" id="home_tel_1"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Cellphone</label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="cellphone" id="cellphone_1"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Employer </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="employer" id="employer_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label>Email </label>
                                            <div class="padding-wrap">
                                                <input type="email"
                                                       class="form-control custom-mainforminput "
                                                       name="email" id="email_1"
                                                       value="" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <hr>
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Next"
                                       id="btnSaveSign0"
                                       class="submitbtn nextprevbtn next" style="background: red;" />
                            </div>
                    </div>

                    <div class="wizard-sec ">
                            <div class="top-section">
                                <h2 style="text-align: center;">Emergency Contact</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-8">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Name<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Name_1" id="Name_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Relation to Patient<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Relation to Patient_1" id="Relation to Patient_1" value=""
                                                />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Home Phone<span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="Home Phone_1" id="Home Phone_1"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Cell Phone<span class="required">*</span> </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="Cell Phone_1" id="Cell Phone_1"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-8">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Name</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Name_2" id="Name_2"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Relation to Patient </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Relation to Patient_2" id="Relation to Patient_2" value=""
                                                />
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-3">
                                            <label>Home Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="Home Phone_2" id="Home Phone_2"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Cell Phone </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="Cell Phone_2" id="Cell Phone_2"
                                                       value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <hr>
                            <div class="top-section">
                                <h2 style="text-align: center;">Insurance Information</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                            <div class="col-12 col-md-2">
                                                <label>Insurance Company<span class="required">*</span> </label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput "
                                                           name="Insurance Company " id="Insurance Company "
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-2">
                                                <label>Policy Number <span class="required">*</span> </label>
                                                <div class="padding-wrap">
                                                    <input type="tel"
                                                           class="form-control custom-mainforminput "
                                                           name="Policy Number" id="Policy Number "
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-2">
                                                <label>Group Number<span class="required">*</span>  </label>
                                                <div class="padding-wrap">
                                                    <input type="tel"
                                                           class="form-control custom-mainforminput "
                                                           name="Group Number " id="Group Number"
                                                           value="" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-2">
                                                <label>Policy Holder<span class="required">*</span> </label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput "
                                                           name="Policy Holder " id="Policy Holder"
                                                           value="" />
                                                </div>
                                            </div>



                                            <div class="col-12 col-md-2">
                                                <label>Date of Birth <span class="required">*</span>  </label>
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                           class="form-control custom-mainforminput dobpicker  "
                                                           name="Date of Birth" id="Date of Birth"
                                                           value="" />
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>


                            <p style="font-weight: bold">* Both natural parents will have custody of this patient unless there is a Florida court order to the contrary. Both natural parents retain full access
                                to medical records and reports unless otherwise restricted by a specific court order. </p>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Who has custody of the patient? Name</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="" id="custody_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Relation to Patient_2" id="relationship_1" value=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Who has custody of the patient? Name</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="" id="custody_2"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="Relation to Patient_2" id="relationship_2" value=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <hr>

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back" id="btnSaveSign11" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input  type="submit" value="Next" id="btnSaveSign1" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>

                    <div class="wizard-sec">

                            <div class="top-section">
                                <h2 style="text-align: center;">Pediatric Health History</h2>
                            </div>
{{--

                        <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <label>Name:"Name of Patient"</label>
                                        &nbsp; &nbsp;
                                        <label>Date of Birth:"DOB"</label>
                                    </div>
                                </div>
                            </div>
--}}

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label>Reason for Visit</label>
                                            <div class="padding-wrap">
                                                <textarea
                                                        class="form-control custom-mainforminput "
                                                        rows="4" name="message"
                                                        id="message"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>



                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Hospital of Birth
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="" id="hob"
                                                       value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-6">
                                            <label>Has your child had to receive any blood transfusions or blood products?<span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-5">
                                            <label>Has your child been hospitalized or had surgery in the past? <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>If yes, please give reason (starting with most recent)
                                            </label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name="y_reason"
                                                          rows="4"

                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
<hr>



                            <div class="top-section">
                                <h2 style="text-align: center;">Family Medical History</h2>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Mother (name)</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="name_m"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Health Problems</label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name="problem_1"
                                                          rows="4"

                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Father (name)</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="name_f"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Health Problems</label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name="problem_2"
                                                          rows="4"

                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>



                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Sibling (name)</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="name_s1"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Health Problems</label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name="problem_3"
                                                          rows="4"

                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Sibling (name)</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="name_s2"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Health Problems</label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name="problem_4"
                                                          rows="4"

                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Sibling (name)</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="name_s3"
                                                       value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <label>Health Problems</label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name="problem_5"
                                                          rows="4"

                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        <hr>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">

                                    <div  class="form-html">
                                        <p style="text-align: center; font-weight: bold;"><strong><span style="font-size: 14pt;">Other Familial Medical Conditions</span></strong></p>
                                        <p style="text-align: center;"><span style="font-size: 12pt;">(Please select if any BLOOD relative has a history of the following conditions)</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">

                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label>Birth Defects <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div style="margin-left:10px; "style="margin-left:20px; "  class="col-12 col-md-3 ">
                                            <label>Hearing/Vision <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_2"
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
                                            <label>Diabetes <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div style="margin-left:10px;" class="col-12 col-md-3">
                                            <label>Anemia <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_2"
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
                                            <label>Seizures <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div style="margin-left:10px;" class="col-12 col-md-3">
                                            <label>Migraines  <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_2"
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
                                            <label>Lung/Asthma <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div style="margin-left:10px;" class="col-12 col-md-3">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;GI <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_2"
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
                                            <label>Kidney <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div style="margin-left:10px;" class="col-12 col-md-3">
                                            <label>Arthritis <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_2"
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
                                            <label>Heart Disease <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>

                                        <div style="margin-left:10px;" class="col-12 col-md-3">
                                            <label>High Blood Pressure <span class="required">*</span></label>

                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_2"
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
                                            <label>Alcohol/Drug/Tobacco/HIV  <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
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
                                            <label>Cancer  <span class="required">*</span></label>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="Yes" >  Yes</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" name="answer" value="No" > No</label>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label>Relationship</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="relationsip_1"
                                                       value="" />
                                            </div>
                                        </div>


                                        <div style="margin-left:10px;" class="col-12 col-md-2">
                                            <label>Type</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name="type"
                                                       value="" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                      <hr>




                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back" id="btnSaveSign12" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input  type="submit" value="Next" id="btnSaveSign2" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>

                    </div>

                    <div class="wizard-sec">



                            <div class="top-section">
                                <h2 style="text-align: center;"> Child's History</h2>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label>  Child's History - Select All That Apply</label>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Birth Defects" > Birth Defects</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Seizures" > Seizures</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Complications with Delivery" > Complications with Delivery</label>
                                        </div>


                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Diabetes" > Diabetes</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Diarrhea" > Diarrhea</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Speech Problems" > Speech Problems</label>
                                        </div>


                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Cold Sores" > Cold Sores</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Walking Problems" > Walking Problems</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Anemia" > Anemia</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Bleeding Disorder" > Bleeding Disorder</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Easy Bruising" > Easy Bruising</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Head Injuries" > Head Injuries</label>
                                        </div>

                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Ear Infections" > Ear Infections</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Blood in Urine" > Blood in Urine</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Pain While Urinating" > Pain While Urinating</label>
                                        </div>

                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Growing Pains" > Growing Pains</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Asthma" > Asthma</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Heart Problems" > Heart Problems</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Chickenpox" > Chickenpox</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Rosacea" > Rosacea</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Runny nose/Congestion" > Runny nose/Congestion</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Sickle Cell" > Sickle Cell</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Dry Skin" > Dry Skin</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Cancer" > Cancer</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Ear Infections" > Migraines</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Broken Bone" >Broken Bone</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Lazy Eye" > Lazy Eye</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Weight gain/Weight loss" > Weight gain/Weight loss</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Tonsillitis" > Tonsillitis</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="TB" > TB</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Kidney Disease" > Kidney Disease</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Stomach Problems" > Stomach Problems</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Allergies" > Allergies</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Joint Pain" > Joint Pain</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Temper Tantrums" > Temper Tantrums</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Hearing Problems" > Hearing Problems</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Constipation" > Constipation</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Breathing Problems" > Breathing Problems</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Convulsions" > Convulsions</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Frequent Fevers" > Frequent Fevers</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Jaundice/Yellow Skin" > Jaundice/Yellow Skin</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Trouble Swallowing" > Trouble Swallowing</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Vomits Frequently/Spits up" > Vomits Frequently/Spits up</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Vision Problems" > Vision Problems</label>
                                        </div>

                                        <!--    <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Pain While Urinating" > Pain While Urinating</label>
                                            </div>-->

                                    </div>


                                </div>
                            </div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <label> Other Medical History Not Listed</label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name=""
                                                          rows="4"
                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-3">
                                            <label>Type of Delivery <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name=""
                                                       value="" />
                                            </div>
                                        </div>



                                        <div class="col-12 col-md-3">
                                            <label>Gestational Age</label>
                                            <div class="padding-wrap">
                                                <input type="text"
                                                       class="form-control custom-mainforminput "
                                                       name=""
                                                       value="" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-6">
                                            <label> Any other problems in your child's development?</label>
                                            <div class="padding-wrap">
                                                <textarea placeholder="such as motor skills, language concerns, or behavior concerns" type="text"
                                                          class="form-control custom-mainforminput "
                                                          name=""
                                                          rows="4"
                                                          value="" ></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label> Medications <span class="required">*</span></label>
                                            <div class="padding-wrap">
                                                <textarea type="text"
                                                          class="form-control custom-mainforminput "
                                                          name=""
                                                          rows="4"
                                                          value="" ></textarea>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">



                                    </div>

                                </div>
                            </div>


                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back" id="btnSaveSign13" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input  type="submit" value="Next" id="btnSaveSign3" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>

                  </div>

                    <div class="wizard-sec">




                            <div class="top-section">
                                <h2 style="text-align: center;">Allergy Questionnaire</h2>
                            </div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label>  Do you have any of these symptoms? (Please check)</label>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Cough" > Cough</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Wheezing" > Wheezing</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Shortness of Breath" > Shortness of Breath</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Chest tightness" > Chest tightness</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Sneezing" > Sneezing</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Runny Nose" > Runny Nose</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Nasal Congestion" > Nasal Congestion</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Itchy Nose" > Itchy Nose</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Itchy/Watery Eyes" > Itchy/Watery Eyes</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Postnasal Drip" > Postnasal Drip</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Nasal Polyps" > Nasal Polyps</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Poor Sense of Smell" > Poor Sense of Smell</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Ear Infections" > Ear Infections</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Sinus Infections" > Sinus Infections</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Blocked Ears" > Blocked Ears</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Eczema" > Eczema</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Hives/Swelling" > Hives/Swelling</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Headaches" > Headaches</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Snoring" > Snoring</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Fatigue" > Fatigue</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Phlegm/Sputum" >  Phlegm/Sputum</label>
                                        </div>


                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>Color
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="color"/>
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
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput "
                                               name="" id="other"/>
                                    </div>
                                </div></div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label>  Check any of the following which seem to trigger (or cause) symptoms or bother you:</label>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Grass" > Grass</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Hay" > Hay</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Mold and Mildew" > Mold and Mildew</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Basements" > Basements</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Leaves" > Leaves</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value=" Cats" >  Cats</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Dogs" > Dogs</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Horses" > Horses</label>
                                        </div>

                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Other animals" > Other animals</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Alcoholic Beverages " >  Alcoholic Beverages</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value=" Cosmetics" >  Cosmetics</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value=" Perfumes" > Perfumes</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Insecticides" > Insecticides</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Odors" > Odors</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Exercise" > Exercise</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Drafts" > Drafts</label>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Aerosol sprays" > Aerosol sprays</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Smoke" > Smoke</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Pollution" > Pollution</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Latex (rubber)" > Latex (rubber)</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="House dust" >House dust</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Humidity" > Humidity</label>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Weather changes" > Weather changes</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Nervousness" > Nervousness</label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Cold Air" > Cold Air</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Trees" > Trees</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="padding-wrap">
                                        <label>Other
                                        </label>
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput "
                                               name="" id="other2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>When are your symptoms worse?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Year Round" > Year Round</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="Seasonal" > Seasonal</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Are symptoms better away from home?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-2">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Year Round" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="Seasonal" > No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>If yes, when?
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="swhen"/>
                                            </div>
                                        </div>
                                    </div></div></div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">

                                            <div class="padding-wrap">
                                                <label>
                                                    Occupation (current or former)
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="occupation_c"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">

                                            <div class="padding-wrap">
                                                <label>
                                                    Any harmful exposure at work or school?
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="exposure"/>
                                            </div>
                                        </div>
                                    </div></div></div>

                  <hr>



                            <div class="top-section">
                                <h2 style="text-align: center;">Environmental Survey</h2>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-5">
                                            <label>Pets</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-2">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Cats" > Cats</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="Dogs" > Dogs</label>
                                                </div>

                                                <div class="col-12 col-md-2">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Birds" > Birds</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="None" > None</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-4">

                                            <div class="padding-wrap">
                                                <label>
                                                    Other
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="other_pets"/>
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
                                                <label>
                                                    Number of pets
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="noof_pets"/>
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-3">

                                            <div class="padding-wrap">
                                                <label>
                                                    Are they indoor or outdoor?

                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="inout_pets"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Are there any tobacco smokers in your home?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-5">
                                            <label>Do you have allergy proof encasing for pillow or mattress?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-2">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div></div></div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label> What type of pillows do you have?</label>

                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="pillow"/>

                                            </div></div>
                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label> What type of comforter do you have?</label>

                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="comforter"/>

                                            </div></div>


                                    </div></div></div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <label> What type of floor covering do you have in your bedroom?</label>
                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Hard surface" > Hard surface</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label  class="mt-2"><input type="checkbox" name="answer" value="Carpeting" > Carpeting</label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="padding-wrap">
                                                <label> Other Floor Covering</label>

                                                <textarea class="form-control custom-mainforminput "
                                                          rows="4"
                                                          name="covering" ></textarea>

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
                                                <label> How old is your mattress?</label>

                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="old"/>

                                            </div></div>
                                        <div class="col-12 col-md-4">
                                            <div class="padding-wrap">
                                                <label> What is in your mattress? (i.e. cotton/horse hair)?</label>

                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="mattress"/>

                                            </div></div>


                                    </div></div></div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Do you have air conditioning?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>If yes</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-4">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Window Unit" > Window Unit</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="Central" > Central</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div></div></div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label>Do you have problems with roaches or mice?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label>Do you have water leaks, mold contamination?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div></div></div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">


                                        <div class="col-12 col-md-4">
                                            <label>Is your home/apartment excessively humid?</label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div></div></div>
                        

<hr>


                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back" id="btnSaveSign14" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input  type="submit" value="Next" id="btnSaveSign4" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>

                    <div class="wizard-sec">
                        <div class="top-section">
                            <h2 style="text-align: center;">Your Past Medical History</h2>
                        </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <label>  Check all that apply</label>
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Eczema" > Eczema</label>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Upper Respiratory Infection" > Upper Respiratory Infection</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Asthma" > Asthma</label>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <label  class="mt-2"><input type="checkbox" name="answer" value="Sinus Problems" > Sinus Problems</label>
                                        </div>



                                        <div class="col-12 col-md-2">
                                            <label   class="mt-2"><input type="checkbox" name="answer" value="Emphysema" > Emphysema</label>
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-6">
                                            <div class="padding-wrap">
                                                <label>   If yes to any of the above, please explain</label>

                                                <textarea type="text" value=""
                                                          class="form-control custom-mainforminput "
                                                          name="" id="explain"
                                                          rows="4"></textarea>

                                            </div>
                                        </div>
                                    </div>

                                </div></div>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-2">
                                            <label>Do you smoke? <span class="required">*</span></label>
                                            <div class="row no-gutters">

                                                <div class="col-12 col-md-3">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>If yes, how much?
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="howmuch"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label>Have you smoked in the past?<span class="required">*</span> </label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-2">
                                                    <label   class="mt-2"><input type="checkbox" name="answer" value="Yes" > Yes</label>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label  class="mt-2"><input type="checkbox" name="answer" value="No" > No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <div class="padding-wrap">
                                                <label>If yes, when did you stop?
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="stop"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>If yes, how many years have you smoked?
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="year_smoked"/>
                                            </div>
                                        </div>
                                    </div></div></div>
                        <hr>

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back" id="btnSaveSign15" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input  type="submit" value="Next" id="btnSaveSign5" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>



                    <div class="wizard-sec">
                        <div class="top-section">
                            <h2 style="text-align: center;">  Pharmacy</h2>
                        </div>
                        <div class="form-section">



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <div class="padding-wrap">
                                                <label>Pharmacy Name
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="pharmacy_name"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8">
                                            <div class="padding-wrap">
                                                <label>Address
                                                </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="address-pharmacy"/>
                                            </div>
                                        </div>
                                    </div></div></div>

                        </div>

                        <div class="form-section last mb-5">

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back" id="btnSaveSign16" class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>
                                <div class="padding-wrap">
                                    <input  type="submit" value="Next" id="btnSaveSign6" class="submitbtn nextprevbtn next " style="background: red;  margin-left: 5px"></div>
                            </div>
                        </div>
                    </div>


                    <div class="wizard-sec">

                        <div class="top-section">
                            <h2 style="text-align: center;">Authorization To Release Medical Care of a Minor</h2>
                        </div>
                        <div class="form-section">

                            <p>I "Patient Name", the parent or legal guardian of a a, give permission for the following individuals, in my absence, to accompany and make decisions for my child. In addition, the listed authorized person(s) have permission to discuss medical information regarding my child. </p>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="name1"/>

                                            </div></div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="relation1"/>

                                            </div></div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone1" id="telephone" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div></div></div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="name2"/>

                                            </div></div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="relation2"/>

                                            </div></div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone2" id="telephone2" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div></div></div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="name3"/>

                                            </div></div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="relation3"/>

                                            </div></div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone3" id="telephone3" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div></div></div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="name4"/>

                                            </div></div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="relation4"/>

                                            </div></div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone4" id="telephone4" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div></div></div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">
                                            <label> Name of Authorized Person</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="name5"/>

                                            </div></div>
                                        <div class="col-12 col-md-3">
                                            <label> Relation</label>
                                            <div class="padding-wrap">


                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="relation5"/>

                                            </div></div>

                                        <div class="col-12 col-md-3">
                                            <label>Telephone </label>
                                            <div class="padding-wrap">
                                                <input type="tel"
                                                       class="form-control custom-mainforminput "
                                                       name="telephone5" id="telephone5" value=""
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div>
                                        </div>


                                    </div></div></div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label class="" >Parent/Guardian Signature</label>
                                            <div id="sig1" ></div>  <br/>

                                            <span id="clear1" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature641" name="signed" style="display: none"></textarea>

                                        </div>
                                  {{--      <div style="margin-left: 15px" class="col-12 col-md-4">
                                            <div class="padding-wrap">
                                                <label>Parent/Guardian's name:</label>
                                            </div>


                                        </div>--}}


                                        <div style="margin-left: 10px" class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput dobpicker  "
                                                       name="todate" id="todate_pg" readonly />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="top-section">
                            <br>
                            <br>
                            <h2 style="text-align: center;">Consent for Treatment of a Minor</h2>
                        </div>
                        <div class="form-section">
                            <p>
                                I "Patient Name", hereby authorize Pediatric and Internal Medicine Specialists DBA PedIM Healthcare and/or PedIM Healthcare powered
                                by Sick N Well (telemedicine) and other medical personnel in charge of my child a a, care to administer examinations,
                                immunizations, treatments and view my child's prescription history from an external
                                source as may be deemed medically necessary in the exercise of their professional judgement.
                            </p>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label class="" >Parent/Guardian Signature</label>
                                            <div id="sig2" ></div>  <br/>

                                            <span id="clear2" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature642" name="signed" style="display: none"></textarea>

                                        </div>
                                        <div style="margin-left: 10px" class="col-12 col-md-4">
                                            <label class="" >Witness Signature</label>
                                            <div id="sig3" ></div>  <br/>

                                            <span id="clear3" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature643" name="signed" style="display: none"></textarea>

                                        </div>

                                     {{--   <div class="col-12 col-md-2">
                                            <div class="col-12 col-md-2">
                                                <label>Parent/Guardian:</label>
                                            </div>
                                        </div>--}}





                                    </div>
                                </div>

                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">


                                                <div class="col-12 col-md-2">
                                                    <div class="padding-wrap">
                                                    <label>Relationship to Patient</label>
                                                    <input type="text" value=""
                                                           class="form-control custom-mainforminput  "
                                                           name="todate" id="rel_pat" readonly />
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-2">

                                                    <div class="padding-wrap">
                                                        <label>Date<span class="required">*</span> </label>
                                                        <input type="text" value=""
                                                               class="form-control custom-mainforminput dobpicker  "
                                                               name="todate" id="todate" readonly />
                                                    </div>
                                                </div>


                                        <div  class="col-12 col-md-2">

                                            <label>Name of Witness</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="name_witness"/>
                                            </div></div>


                                        <div class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput dobpicker  "
                                                       name="todate" id="date_witness" readonly />
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>




                        <div class="top-section">
                            <br>
                            <br>
                            <h2 style="text-align: center;">  Authorization to Release Medical Information</h2>
                        </div>
                        <div class="form-section">
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-3">
                                            <label> Patients Name:</label>
                                        </div>



                                        <div class="col-12 col-md-3">
                                            <label>Date of Birth:</label>
                                        </div>



                                    </div>
                                </div>

                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">

                                            <label>Previous Physician Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="p_office_name"/>
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>Specialty</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="Specialty"/>
                                            </div></div>
                                        <div class="col-12 col-md-2">

                                            <label>Phone</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="phone_office" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>Fax</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="Fax"/>
                                            </div></div>



                                        <div class="col-12 col-md-2">

                                            <label>City</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="city_office"/>
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>State</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="state_off"/>
                                            </div></div>



                                    </div>
                                </div>
                            </div>




                            <p>
                                I, "Patient Name", hereby authorize and release the custodian of my dependent’s (a a) medical records to PedIM Healthcare Inc., including psychological, psychiatric, developmental/rehabilitative alcohol, and/or drug abuse human immunodeficiency virus (HIV) testing and treatment, ARC (AIDS related condition),
                                and/or acquired immunodeficiency syndrome (AIDS) information.
                            </p>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label>Release to: PedIM Healthcare</label>

                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Dacelin St. Martin, MD" > Dacelin St. Martin, MD</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label  class="mt-2"><input type="checkbox" name="answer" value="Lilia Shammas, MD" > Lilia Shammas, MD</label>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Richard Martin, MD" > Richard Martin, MD</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-html" >
                                <p style="text-align: left;font-weight: bold;"><strong>Address:</strong> 1990 N Prospect Ave.</p>
                                <p style="text-align: left;font-weight: bold;">Lecanto, FL 34461</p>
                                <p style="text-align: left;font-weight: bold;"><strong>Phone:&nbsp;</strong>352-27-6888</p>
                                <p style="text-align: left;font-weight: bold;"><strong>Fax:&nbsp;</strong>352-527-8818</p>
                                <p style="text-align: left;">&nbsp;<span style="font-size: 10pt; font-weight: bold;"><strong>For questions contact:&nbsp;</strong>Medical records at 352-527-6888 Opt. 8</span></p>
                                <p style="text-align: left;"><span style="font-size: 10pt;font-weight: bold;">Completed forms can be faxed to 352-527-8818 for processing.</span></p>
                                <p style="text-align: left;"><span style="font-size: 10pt;font-weight: bold;"><strong>Records that exceed 15 pages,we request that they be mailed to: P.O. Box 2066, Lecanto FL 34460</strong></span></p>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label>Purpose of Use or Disclosure</label>

                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Continuity of Care" > Continuity of Care</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <input type="checkbox"  name="answer" value="" />&nbsp;&nbsp;<input type="text" value="other"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-12">
                                            <label>Information to be released</label>

                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Complete Chart" > Complete Chart</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label  class="mt-2"><input type="checkbox" name="answer" value="Diagnostic Testing" > Diagnostic Testing</label>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Lab Reports" > Lab Reports</label>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <label   class="mt-2"><input type="checkbox" name="answer" value="Immunizations" > Immunizations</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <input type="checkbox"  name="answer" value="" />&nbsp;&nbsp;<input type="text" value="other"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>I acknowledge and hereby consent to such, that the released information may contain alcohol, drug abuse, psychiatric, HIV, or AIDS information</p>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">


                                        <div class="col-12 col-md-3">

                                            <label>Parent/Guardian Initials
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="initials"/>
                                            </div></div>




                                    </div>
                                </div>
                            </div>

                            <p>-I understand that all medical, surgical, psychiatric, and psychological information is confidential and that the patient records are the property of Pediatric & Internal Medicine Specialists, Inc. and its related corporate entities. I will not hold Pediatric & Internal Medicine Specialist, Inc., its employees, staff, or representatives responsible for any damage, mental or physical, which may be caused by the release of patient records and the information contained therein.</p>

                            <br>
                            <p>-I understand that my authorization for release may be revoked at any time by written request to Pediatric & Internal Medicine Specialists, Inc., but may not be revoked to include the release allowed by this document. Also, if this authorization is permission for Pediatric & Internal Medicine Specialists, Inc. to disclose information to an insurance company, in order for you to obtain insurance coverage, the insurance company may still have the legal right to use the information to contest your coverage.</p>
                            <br>
                            <p>-I understand that the person or organization that receives the information because of this authorization may disclose this information to other people or organizations without my knowledge or consent. Therefore, I hereby release Pediatric & Internal Medicine Specialists, Inc., its employees, its staff, and representatives from all liability relating to or arising out of this release of information contained Pediatric & Internal Medicine Specialists, Inc. records.</p>
                            <br>
                            <p>-I understand I can refuse to sign this authorization and I do not need to sign this authorization to receive treatment services from Pediatric & Internal </p>
                            <br>
                            <p>Medicine Specialists, Inc. However, if the only purpose for providing the service is to obtain information in order to release information to myself or third party, then I understand that I must sign the authorization in order to receive the service.</p>
                            <br>
                            <p>-I understand that there may be a charge of $1.00 per page for the first 25 pages and then $.25 per page thereafter, plus postage and handling, for copy services unless copies provided by Pediatric & Internal Medicine Specialists, Inc. are sent directly to a physician or health facility for the purpose of continuity of care.</p>
                            <br>
                            <p> This authorization will expire in twelve (12) months following the date of signature, unless otherwise specified below:</p>
                            <br>
                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">





                                    </div>
                                </div>
                            </div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-3">

                                            <label> Expiration Date or Circumstance
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="exp_date"/>
                                            </div></div>


                                        <div class="col-12 col-md-4">
                                            <label class="" >Parent/Guardian Signature</label>
                                            <div id="sig4"></div>  <br/>

                                            <span id="clear4" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature644" name="signed" style="display: none"></textarea>

                                        </div>

                                        <div style="margin-left: 15px" class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput dobpicker  "
                                                       name="todate" id="date_pg3" readonly />
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">


                                        <div class="col-12 col-md-3">

                                            <label> Relationship to Patient
                                            </label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="rel_patient"/>
                                            </div></div>



                                        <div class="col-12 col-md-3">

                                            <label> Witnessed/Requested by</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="witnessed"/>
                                            </div></div>
                                        <div  class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput dobpicker  "
                                                       name="todate" id="witness_date" readonly />
                                            </div>


                                        </div>




                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top-section">
                            <br>
                            <br>
                            <h2 style="text-align: center;">  Authorization to Release Medical Information</h2>
                        </div>
                        <div class="form-section">

                            <p style="text-align: center;">Please list any members of your healthcare team (specialists and/or facilities) that
                                you wish to have medical records obtained from for your continuation of care.</p>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label>  Previous Physician Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_off_name"/>
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>  Specialty</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Specialty"/>
                                            </div></div>


                                        <div class="col-12 col-md-2">

                                            <label> Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_phone" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                            </div></div>

                                        <div class="col-12 col-md-2">
                                            <label> Fax</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Fax"/>
                                            </div></div>

                                        <div class="col-12 col-md-4">

                                            <label>Address</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Address"
                                                       rows="4"/>
                                            </div></div>

                                    </div>
                                </div>
                            </div>



                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label>  Previous Physician Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_off_name"/>
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>  Specialty</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Specialty"/>
                                            </div></div>


                                        <div class="col-12 col-md-2">

                                            <label> Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_phone" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                            </div></div>

                                        <div class="col-12 col-md-2">
                                            <label> Fax</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Fax"/>
                                            </div></div>

                                        <div class="col-12 col-md-4">

                                            <label>Address</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Address"
                                                       rows="4"/>
                                            </div></div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label>  Previous Physician Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_off_name"/>
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>  Specialty</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Specialty"/>
                                            </div></div>


                                        <div class="col-12 col-md-2">

                                            <label> Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_phone" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div></div>

                                        <div class="col-12 col-md-2">
                                            <label> Fax</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Fax"/>
                                            </div></div>

                                        <div class="col-12 col-md-4">

                                            <label>Address</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Address"
                                                       rows="4"/>
                                            </div></div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">
                                    <div class="row no-gutters">

                                        <div class="col-12 col-md-2">
                                            <label>  Previous Physician Name</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_off_name"/>
                                            </div></div>

                                        <div class="col-12 col-md-2">

                                            <label>  Specialty</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Specialty"/>
                                            </div></div>


                                        <div class="col-12 col-md-2">

                                            <label> Phone</label>
                                            <div class="padding-wrap">
                                                <input type="tel" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_phone" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                            </div></div>

                                        <div class="col-12 col-md-2">
                                            <label> Fax</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Fax"/>
                                            </div></div>

                                        <div class="col-12 col-md-4">

                                            <label>Address</label>
                                            <div class="padding-wrap">
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput  "
                                                       id="pre_Address"
                                                       rows="4"/>
                                            </div></div>

                                    </div>
                                </div>
                            </div>

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
                                                    <h2 style="text-align: center;">  Patient Financial Responsibility</h2>

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
                                                <h2 style="text-align: center;">  Notice of Privacy Practices</h2>

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
                                    <div id="collapsefive" class="collapse" data-parent="#accordion2" >
                                        <div class="card-body">

                                            <div class="form-section">
                                                <hr>
                                                <h2 style="text-align: center;">  Patients Rights Regarding Their Medical Information</h2>

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
                                            </li >
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

                            <p>Our notice of privacy practices and patient rights and responsibilities provides information about how we may use and disclose medical information about you. As provided in our notice, the terms of our notice may change. If we change our notices, you may request a revised copy.</p>
                            <br><br>

                            <p> I, "Patient Name", have been provided a copy of the Pediatric and Internal Medicine Specialists Inc., DBA PedIM Healthcare and/or PedIM Healthcare powered by Sick N Well (telemedicine) Practices and Patient Rights and Responsibilities on behalf of my child a a. I understand that I may ask questions to PedIM Healthcare if I do not understand any information contained in the privacy practices and the patient rights and responsibilities.</p>


                            <div class="form-group row mt-4">
                                <div class="col-12 col-md-12">

                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-4">
                                            <label class="" >Patient Signature</label>
                                            <div id="sig5" class="kbw-signature"></div>  <br/>

                                            <span id="clear5" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                            <textarea id="signature645" name="signed" style="display: none"></textarea>

                                        </div>
                                    {{--    <div class="col-12 col-md-4">
                                            <div class="col-12 col-md-2">
                                                <label>Name:</label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label>Date of Birth:</label>
                                            </div>

                                        </div>--}}


                                        <div style="margin-left: 10px" class="col-12 col-md-2">

                                            <div class="padding-wrap">
                                                <label>Date<span class="required">*</span> </label>
                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput dobpicker  "
                                                       name="todate" id="todate2" readonly />
                                            </div>

                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label> Relationship to Patient</label>
                                            <div class="padding-wrap">

                                                <input type="text" value=""
                                                       class="form-control custom-mainforminput "
                                                       name="" id="relation_patient"/>

                                            </div></div>

                                    </div>
                                </div>

                            </div>
<hr>

                            <div class="d-flex justify-content-center">

                                <div class="padding-wrap"> <input  type="submit" value="Back"  class="submitbtn nextprevbtn back" style="background: red; margin-right: 5px;"></div>

                                <div class="padding-wrap">

                                    <input  type="submit" value="Submit" id="signaturebtn" class="submitbtn " style="background: red;  margin-left: 5px"></div>
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


    var sig2 = $('#sig2').signature({syncField: '#signature642', syncFormat: 'PNG'});

    $('#clear2').click(function(e) {
        e.preventDefault();
        sig2.signature('clear');
        $("#signature642").val('');
    });

    var sig3 = $('#sig3').signature({syncField: '#signature643', syncFormat: 'PNG'});

    $('#clear3').click(function(e) {
        e.preventDefault();
        sig3.signature('clear');
        $("#signature643").val('');
    });

    var sig4 = $('#sig4').signature({syncField: '#signature644', syncFormat: 'PNG'});

    $('#clear4').click(function(e) {
        e.preventDefault();
        sig4.signature('clear');
        $("#signature644").val('');
    });

    var sig5 = $('#sig5').signature({syncField: '#signature645', syncFormat: 'PNG'});

    $('#clear5').click(function(e) {
        e.preventDefault();
        sig5.signature('clear');
        $("#signature645").val('');
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
    $('#signaturebtn').on('click', function(e)
    {
        var signature = jQuery("#signature643").val();
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
        var signature = jQuery("#signature644").val();
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
        var signature = jQuery("#signature645").val();
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