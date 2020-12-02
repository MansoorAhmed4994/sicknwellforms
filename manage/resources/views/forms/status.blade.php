<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head> 
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
    <link rel="stylesheet" href="{{ asset('public/theme-resources/css/main-form.css') }}" />
    <script src="{{ asset('public/theme-resources/js/jquery-3.4.1.min.js') }}"></script>
</head>
<body>

<?php
    if(count($errors) > 0)
    {
        foreach($errors->all() as $error)
        {
         echo"
         
                <div class='alert alert-warning custom-alert'>
                    <strong>Warning! </strong>$error
                </div>
         
         ";
        }
    }
   
    if(session()->has('warning'))
    {
         
         echo"
         
                <div class='alert alert-warning custom-alert'>
                    <strong>Warning! </strong>".session()->get('warning')."         
                </div>
         
         "; 
    }
    else if(session()->has('success'))
    {
         
         echo"
         
                <center><div class='alert alert-success custom-alert'>
                    <strong></strong>".session()->get('success')."         
                </div></center>
         
         "; 
    }
?>

</body>
<script src="{{ asset('public/theme-resources/js/popper.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/smooth-scrollbar.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/noty.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/main.js') }}"></script>
</body>

</html>