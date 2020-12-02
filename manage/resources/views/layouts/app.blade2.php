<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'SICKNWELL') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/login.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-dialog.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/airdatepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}" />

    <script src="{{ asset('public/js/jquery-3.4.1.min.js') }}"></script>
</head>

<body>
    
    <div id="wrapper enroll-padding">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="navbar-brand"><a href="#" target="_blank"><img src="{{ asset('public/images/logo.png') }}" alt="Sick N Well"></a></div>
            </div>
            <!-- Top Menu Items -->
        </nav>
        
        
    
        <div id="page-wrapper" class="with-sidebar">
            <div class="main-sidebar-content-c">
                <div class="sidebar-c">
                    <ul> 
                        <li class="active"><a href="{{route('provider-profile')}}">Profile</a></li>
                        <li><a href="{{route('create-meeting')}}">Schedule Meeting</a></li> 
                        <li><a href="{{route('view-meetings')}}">Meetings Detail</a></li>
                        <li><a href="{{route('log-out')}}">Log Out</a></li>
                    </ul>
                </div>
                <div class="sidebar-right-content">
                     
                
                @include('layouts.error')
                @yield('content')
        
        
        </div> 
    </div> 
</div>
<footer>
    <div class="col-sm-6 text-left"></div>
    <div class="col-sm-6 ">© 2020 Sick N Well. All rights reserved.</div>
</footer>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirm Delete
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<script>
    $('document').ready(function () {


        $('#datepicker').datepicker({
            language: 'en',
            dateFormat: 'mm/dd/yyyy',
            maxDate: new Date()
        })

        $('#schedule-datepicker').datepicker({
            language: 'en',
            dateFormat: 'mm/dd/yyyy',
            minDate: new Date(),
            timepicker: true
        })

    })
</script>

<script>
    function CopyHomeAddress() {
        $('#txtMailAddress').val($.trim($('#txtAddress').val()) == '' ? null : $.trim($('#txtAddress').val()));
        $('#txtMailCity').val($.trim($('#txtCity').val()) == '' ? null : $.trim($('#txtCity').val()));
        $('#txtMailZip').val($.trim($('#txtZip').val()) == '' ? null : $.trim($('#txtZip').val()));
        $('#ddlMailState').val($('#ddlState option:selected').val()).change();
        $('#ddlMailCountry').val($('#ddlCountry option:selected').val()).change();
    }
    $(document).ready(function () {

        // To Validate BankAccountNumber and RoutingNumber, When 'Payment Option' is not 'Sick-n-Well Employee'.

        $('#chkSameAs').change(function () {
            if (this.checked) {
                CopyHomeAddress();
            }
        });

        $('#language, #education').multiselect({
            includeSelectAllOption: true,
            selectAllNumber: false,
            numberDisplayed: 6
        });


    });



    function ValidateFileUpload() {

        var files = $('#fileForUpload')[0].files;
        var fileNames = [];
        var fileSize = 0
        for (var i = 0; i < files.length; i++) {
            fileNames.push(files[i].name);
            fileSize += files[i].size;
        }
        $('.up-filename').text(fileNames.join(', '))


        var fileName = $('#fileForUpload').val().trim();
        fileName = getNameFromPath(fileName);



        if (checkFileExtension(fileName) == false) {
            $('#errorFileUpload').html('Select a .doc, .docx or .pdf, .jpg, .png, .bmp file to upload.').show();
            $('#fileForUpload').val("");
            return false;
        }
    }
</script>

<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap-dialog.js') }}"></script>
<script src="{{ asset('public/js/Common.js') }}"></script>
<script src="{{ asset('public/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('public/js/airdatepicker.min.js') }}"></script>
<script src="{{ asset('public/js/airdatepicker.en.js') }}"></script>
<script src="{{ asset('public/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('public/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>

</body>

</html>