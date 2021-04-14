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
       

        <form method="post" action="{{route('QcmOccupationAlHealthSafeWorkerProgram.update',$submission_id)}}" class="position-relative">
                {{csrf_field()}}
                <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
                <input type="hidden" value="qcm_occupational_health_safe_worker_programs" id="table_name" name="table_name">
                <div class="custom-wizard">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger my-2" style="font-size: 15px">
                            <i class="fas fa-exclamation-triangle mr-2"></i><span>Please fill the Required
                                fields</span>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <center><div class='alert alert-success custom-alert'>
                            <strong></strong>{{session()->get('success')}}         
                        </div></center>
                    @endif 
                    <div class="top-section">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <div class="row no-gutters">
                                        <label>First Name <span class="required" >*</span></label>
                                    </div> 
                                    <div class="padding-wrap">
                                        <input type="text" class="form-control custom-mainforminput   @if($errors->get('first_name')) is-invalid @endif" value="@if(isset($QcmOccupationAlHealthSafeWorkerProgram)) {{$QcmOccupationAlHealthSafeWorkerProgram->first_name}} @else{{old('first_name')}}  @endif" name="first_name" id="first_name" />
                                    </div>
                                </div>

 
                                <div class="col-12 col-md-4">
                                    <div class="row no-gutters">
                                        <label>Last Name <span class="required">*</span></label>
                                    </div>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput @if($errors->get('last_name')) is-invalid @endif" value="@if(isset($QcmOccupationAlHealthSafeWorkerProgram)) {{$QcmOccupationAlHealthSafeWorkerProgram->last_name}} @else{{old('last_name')}}  @endif"
                                               name="last_name" id="last_name"
                                                />


                                    </div>
                                </div>
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
                                               class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value="@if(isset($QcmOccupationAlHealthSafeWorkerProgram)) {{$QcmOccupationAlHealthSafeWorkerProgram->email}} @else{{old('email')}}  @endif"
                                                 name="email" id="email" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Telephone <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" value="@if(isset($QcmOccupationAlHealthSafeWorkerProgram)) {{$QcmOccupationAlHealthSafeWorkerProgram->telephone}} @else{{old('telephone')}}  @endif"
                                               name="telephone" id="telephone"  
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Company Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput @if($errors->get('company_name')) is-invalid @endif" value="@if(isset($QcmOccupationAlHealthSafeWorkerProgram)) {{$QcmOccupationAlHealthSafeWorkerProgram->company_name}} @else{{old('company_name')}}  @endif"
                                                 name="company_name" id="company_name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <label>Message<span class="required">*</span></label>
                            <textarea
                                    class="form-control custom-mainforminput @if($errors->get('message')) is-invalid @endif" 
                                    rows="4" name="message"
                                    id="message"></textarea>
                        </div>
                    </div>


                    <div class="form-section last mb-5">
                        <div class="d-flex">
                            <input type="submit" value="Submit"
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

