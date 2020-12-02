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
    <style>
        .form-group {
            display: flex;
            align-items: center;
        }
        .form-group p {
            margin: 0 16px 0 0;
        }
        .form-group input {
            margin: 0 16px 0 0;
        }
    </style>
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
                    <h2>SicknWell Feedback Form</h2>
                </div>

                <div class="row no-gutters " style="margin-top: 10px;">
                    <div>
                        <p>Please take a moment to fill out this feedback form about your experience. We welcome and value your feedback.
                            Information submitted through this form will remain confidential. Thank you for your participation.</b>
                        </p>
                    </div>
                </div>

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
                                    <label>Date of Appointment</label>
                                    <div class="padding-wrap">

                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
                                               name="doa" id="doa" readonly />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Time of Appointment </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="time_of_appointment" id="time_of_appointment"
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
                            <label>Contact Number <span class="required">*</span></label>
                            <div class="padding-wrap">
                                <input type="tel"
                                       class="form-control custom-mainforminput "
                                       name="telephone" id="telephone" value=""
                                       data-inputmask='"mask": "(999) 999-9999"' data-mask /></div>
                        </div>

                        <div class="col-12 col-md-2">
                            <label>Email </label>
                            <div class="padding-wrap">
                                <input type="email"
                                       class="form-control custom-mainforminput "
                                       name="patient_email" id="patient_email"
                                       value="" />
                                <p><small>example@example.com</small></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>I would like to be contacted by management</label>
                            <select
                                    class="form-control custom-mainforminput  "
                                    value="" name="contact_managment" id="contact_managment">
                                <option value=""> </option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-8">
                            <label>Please tell us about your visit. <span class="required">*</span></label>
                            <textarea
                                    class="form-control custom-mainforminput "
                                    rows="5" name="description"
                                    id="description"></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <p style="font-weight: bold ">This form is intended for Feedback from our Patients in order to improve our services and practice.
                            Not for general commercial offers or sales. Please note that only genuine feedback emails will be processed.
                            </b>
                        </p>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-md-4" style="align-items: center">
                            <form id="captchaForm">
                                <input class="form-control" type="hidden" name="firstNumber"/>
                                <input class="form-control" type="hidden" name="secondNumber"/>
                                <div class="form-group">
                                    <p id="captchaQuest" style="width: 90px"></p>
                                    <input class="form-control " type="text" name="answer" id=""/>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>


                <div class="form-section last mb-5 ">
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Submit"
                               id="send"
                               class="submitbtn" style="background: red;" />

                    </div>
                    <p id="status"></p>
                </div>


            </form>
        </div>

    </main>
</div>



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


<script src="{{ asset('public/theme-resources/js/captcha.js') }}"></script>

<script src="{{ asset('public/theme-resources/js/json2.min.js') }}"></script>

</body>

</html>