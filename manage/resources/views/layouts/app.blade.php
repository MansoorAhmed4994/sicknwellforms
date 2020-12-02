<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head> 
    <title>{{ config('app.name', 'SICKNWELL') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/noty.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/noty-bootstrap-v4.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/airdatepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/main-form.css') }}" />
    <script src="{{ asset('public/theme-resources/js/jquery-3.4.1.min.js') }}"></script>
    <style>.timeEntry-control {
    display: none !important;
}</style>
    <script>
        var base_url = "{{Url('/')}}";
        var token = "<?php echo csrf_token() ?>";
        
    </script>
</head>
<body>
    <div class="wrapper d-flex flex-column">
        <header class="d-flex align-items-center justify-content-between">
            <a href="{{route('client.dashboard')}}" class="logo">
                <img src="{{ asset('public/theme-resources/images/logo.png') }}" class="img-fluid" />
            </a>
            <div class="dropdown user-avatar-dropdown">
                <div class="user-avatar d-flex align-items-center justify-content-center" data-toggle="dropdown" data-display="static">
                    <span>
                    <?php
                    $words = explode(" ", auth()->user()->name);
                    $acronym = "";
                    
                    foreach ($words as $w) {
                      $acronym .= $w[0];
                    }
                    
                    echo $acronym;
                    ?></span>
                </div>
                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <div class="hello-text">Hello <b>{{auth()->user()->name}}</b></div>
                        <ul>
                            <li><a href="#">Settings</a></li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="sub-header d-flex align-items-center justify-content-end">
            <a href="{{route('form-class')}}">Create Form</a>
        </div>
        
        <main class="flex-1 d-flex">
           
            <div class="sidebar h-100 xs-h-auto">
                <div class="scrollbar-fancy h-100">
                    <h4>My Forms</h4>
                    <ul class="ul-type-1">
                        <li>
                            <a href="{{route('form-demo')}}" class="d-flex align-items-center">
                                <i class="fas fa-folder"></i><span>All Forms</span></a>
                        </li>
                    </ul>
                    <ul class="ul-type-1">
                        <li>
                            <a href="{{route('clients.list')}}" class="d-flex align-items-center">
                                <i class="fas fa-folder"></i><span>Clients</span></a>
                        </li>
                    </ul>
                    <!--
                    <h4>Select a client</h4>
                    <ul class="ul-type-2">
                        <li>
                            <a href="index.php">QCM</a>
                        </li>
                        <li>
                            <a href="index.php">Some Other Client 1</a>
                        </li>
                        <li>
                            <a href="index.php">Client 2</a>
                        </li>
                        <li>
                            <a href="index.php">Client XYZ</a>
                        </li>
                    </ul>

                    -->
                </div>
            </div>
           
            
            <div class="main-content flex-1 d-flex flex-column">
                
                <!--@include('layouts.error')-->
                @include('layouts.error')
                @yield('content')
                
                
                </div>
        </main>
    </div>
</body>
<script>
            var base_url = '<?php echo e(url('/')); ?>';
            var token = "<?php echo csrf_token() ?>";
            var base_url = '<?php echo e(url('/')); ?>';
            jQuery('[name="check_credentials"]').on('click', function() {

                jQuery.ajax({
                    url: base_url + "/clients/details/verified",
                    type: "POST",
                    beforeSend: function() {
                        jQuery('[name="available_qty"]').empty().append('<option> Loading...<option>');
                    },
                    data: {
                        id: jQuery("#id").val(),
                        pass: jQuery("#pass").val(),
                        client_id: jQuery("#client_id").val(),
                        _token: token
                    },
                    dataType: "json"
                }).done(function(data) {
                    if (data.status) {
                        $('#loginModal').modal('hide')
                        $('.blur-container').removeClass('blur-container')
                    }else{
                        $(".errshow").show();
                    }
                }).fail(function(jqXHR, textStatus) {
                    alert("Something went wrong. Try Again.");
                });

            });

        </script>
<script src="{{ asset('public/theme-resources/js/popper.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/smooth-scrollbar.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/noty.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/airdatepicker.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/moment.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/airdatepicker.en.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/validate-additional-methods.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/select2.full.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/moment-range.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/timepicker.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.plugin-timepicker.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.timeentry.js') }}"></script>
{{-- <script src="{{ asset('public/theme-resources/js/validation-schemas.js') }}"></script> --}}
<script src="{{ asset('public/theme-resources/js/main.js') }}"></script>
</body>

</html>
        