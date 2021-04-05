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

 
            <form method="post" action="{{route('QcmContactUs.update',$submission_id)}}" class="position-relative">
            {{csrf_field()}}

                <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
                
                <input type="hidden" value="mhst_register_home_sleep_tests" id="table_name" name="table_name">
                <div class="custom-wizard">

                    @if(count($errors) > 0)
                    <div class="alert alert-danger my-2" style="font-size: 15px">
                        <i class="fas fa-exclamation-triangle mr-2"></i><span>Please fill the Required
                            fields</span>
                    </div>
                    @endif


                    <div class="top-section">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <p>Contact Options: You can use the form below to submit your question/comment or follow these links</p>
                        </div>
                    </div>
                    <div class="form-group row mt-4" style="color: darkblue">
                        <div class="col-12 col-md-12">
                            <p>View Clinic Locations | Schedule Telemedicine Consultation | Call 1-844-797-8425</p>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-6">
                                    <div class="row no-gutters">
                                        <label>First Name <span class="required">*</span></label>
                                    </div>
                                    <div class="padding-wrap">
                                        <input type="text" class="form-control custom-mainforminput @if($errors->get('first_name')) is-invalid @endif" value="@if(isset($QcmContactForms)) {{$QcmContactForms->first_name}} @else{{old('first_name')}}  @endif" name="first_name" id="first_name"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-6">
                                    <div class="row no-gutters">
                                        <label>Last Name <span class="required">*</span></label>
                                    </div>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput  @if($errors->get('last_name')) is-invalid @endif" value="@if(isset($QcmContactForms)) {{$QcmContactForms->last_name}} @else{{old('last_name')}}  @endif" name="last_name" id="last_name"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">

                                <div class="col-12 col-md-6">
                                    <label>Phone Number <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput  @if($errors->get('phone_number')) is-invalid @endif" value="@if(isset($QcmContactForms)) {{$QcmContactForms->phone_number}} @else{{old('phone_number')}}  @endif" name="phone_number" id="phone_number" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-6">
                                    <label>Your Email <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput  @if($errors->get('email')) is-invalid @endif" value="@if(isset($QcmContactForms)) {{$QcmContactForms->email}} @else{{old('email')}}  @endif" name="email" id="email" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <label>Comment Box</label>
                            <textarea
                                    class="form-control custom-mainforminput "
                                    rows="4" name="comment_box"
                                    id="comment_box">@if(isset($QcmContactForms)) {{$QcmContactForms->comment_box}} @else{{old('comment_box')}}  @endif</textarea>
                        </div>
                    </div>

                    <div class="form-section last mb-5">
                        <div class="d-flex">
                            <input type="submit" value="Send"
                                   class="submitbtn" style="background: #ee1d25;" />
                        </div>
                    </div>
                    <div class="logos-form w-100 position-absolute">
                        <div class="d-flex justify-content-between align-items-end">
                            <div><img src="http://sicknwellforms.desenador.com/public/theme-resources/images/logo.png " /></div>
                            <div><img src="http://sicknwellforms.desenador.com/public/theme-resources/images/hipaa-badge.png" /></div>
                        </div>
                    </div>

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


<script src="{{ asset('public/theme-resources/js/json2.min.js') }}"></script>




</body>

</html>

