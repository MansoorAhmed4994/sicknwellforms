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
                <?php
                    $start_date = "";
                    $end_date = "";
                    $time_zone = "";
                    //echo $appoint_date_range->start_date;
                    if($appoint_date_range != null)
                    {
                        echo 
                        $start_date = "";
                        $end_date = "";
                        $time_zone = "Pacific/Wake";
                    }  
                ?>


                <form method="post" action="{{route('InOfficeAppointments.create')}}" class="position-relative">
                    {{csrf_field()}} 
                    <input type="hidden" value="{{$client_form_id}}" id="client_forms_id" name="client_forms_id">
                    <input type="hidden" value="{{$time_before_interval ? $time_before_interval : '0'}}" id="time_before_interval" name="time_before_interval">
                    <input type="hidden" value="{{$start_date}}" id="start_date_limit" name="start_date_limit">
                    <input type="hidden" value="{{$end_date}}" id="end_date_limit" name="end_date_limit">
                    <input type="hidden" value="{{$time_zone}}" id="time_zone" name="time_zone">
                    <input type="hidden" value="in_office_appointments" id="table_name" name="table_name">
                    <div class="custom-wizard">
                        <div class="wizard-sec active">
                            <div class="top-section">
                                <h2>PEDIM - In-Office Appointments</h2>
                                <p>Request an appointment.</p>
                            </div>
                            <div class="form-section">
                                <p>New and existing patients can request an appointment date and time below to be seen
                                    in
                                    the office by one of our providers. Please be aware that you will receive an email
                                    confirmation from QCM, stating that the appointment has been comfirmed and
                                    scheduled
                                    by the office staff.</b>
                                </p>
                                @if(count($errors) > 0)
                                <div class="alert alert-danger my-2" style="font-size: 15px">
                                    <i class="fas fa-exclamation-triangle mr-2"></i><span>Please fill the Required
                                        fields</span>
                                </div>
                                @endif
                            </div>
                            <div class="form-section">

                                <div class="form-group row margin-top">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <label>Visit Type <span class="required">*</span></label>
                                        <select class="form-control custom-mainforminput  @if($errors->get('visit_type')) is-invalid @endif" value="{{old('visit_type')}}" name="visit_type" id="visit_type">
                                            <option value=""> </option>
                                            <option value="Covid-19 (Coronavirus) Screening"> Covid-19 (Coronavirus)Screening </option>
                                            <option value="Common Cold"> Common Cold </option>
                                            <option value="Flu Like Symptons"> Flu Like Symptons </option>
                                            <option value="Head Lice"> Head Lice </option>
                                            <option value="Laryngitis"> Laryngitis </option>
                                            <option value="Headache"> Headache </option>
                                            <option value="Allergies"> Allergies </option>
                                            <option value="Cough"> Cough </option>
                                            <option value="Ear Problems"> Ear Problems </option>
                                            <option value="Fever"> Fever </option>
                                            <option value="Insect Bites"> Insect Bites </option>
                                            <option value="Nausea - Vomiting"> Nausea - Vomiting </option>
                                            <option value="Eye Pain"> Eye Pain </option>
                                            <option value="Rash"> Rash </option>
                                            <option value="Sore Throat "> Sore Throat </option>
                                            <option value="Urinary Issues"> Urinary Issues </option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-12 col-sm-6 col-md-8">
                                        <label>Description of issue <span class="required">*</span></label>
                                        <textarea
                                            class="form-control custom-mainforminput @if($errors->get('description')) is-invalid @endif"
                                            rows="5" name="description" value="{{old('description')}}">{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row margin-top">
                                    <div class="col-12">
                                        <h6 class="date-valset">Please select a date</h6>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 ">
                                        <div class="datepicker datepicker-div @if($errors->get('appointment_from')) is-invalid-div @endif"
                                            data-language='en'></div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 ">
                                        <div class="slot-selection">
                                            <div class="main-titlee">


                                            </div>
                                            <div class="slots-items">
                                                <p class="message" style="display: none;">No Slots
                                                    available.<br />Please
                                                    try some other date.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block w-100"></div>
                                    <div class="col-12 col-sm-6 col-md-4"></div>
                                    <div class="col-12 col-sm-6 col-md-4"> 
                                        <select class="timezonePicker" id="timezonepicker" @if(isset($appoint_date_range->time_zone)) disabled @endif>
                                            <option value="Europe/Andorra">Europe/Andorra</option>
                                            <option value="Asia/Dubai">Asia/Dubai</option>
                                            <option value="Asia/Kabul">Asia/Kabul</option>
                                            <option value="Europe/Tirane">Europe/Tirane</option>
                                            <option value="Asia/Yerevan">Asia/Yerevan</option>
                                            <option value="Antarctica/Casey">Antarctica/Casey</option>
                                            <option value="Antarctica/Davis">Antarctica/Davis</option>
                                            <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                            <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                            <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                            <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                            <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                            <option value="Antarctica/Troll">Antarctica/Troll</option>
                                            <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                                            <option value="America/Argentina/Buenos_Aires">
                                                America/Argentina/Buenos_Aires
                                            </option>
                                            <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                            <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                                            <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                            <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                            <option value="America/Argentina/Catamarca">America/Argentina/Catamarca
                                            </option>
                                            <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja
                                            </option>
                                            <option value="America/Argentina/San_Juan">America/Argentina/San_Juan
                                            </option>
                                            <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                            <option value="America/Argentina/San_Luis">America/Argentina/San_Luis
                                            </option>
                                            <option value="America/Argentina/Rio_Gallegos">
                                                America/Argentina/Rio_Gallegos
                                            </option>
                                            <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                            <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                            <option value="Europe/Vienna">Europe/Vienna</option>
                                            <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                            <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                            <option value="Australia/Hobart">Australia/Hobart</option>
                                            <option value="Australia/Currie">Australia/Currie</option>
                                            <option value="Australia/Melbourne">Australia/Melbourne</option>
                                            <option value="Australia/Sydney">Australia/Sydney</option>
                                            <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                            <option value="Australia/Brisbane">Australia/Brisbane</option>
                                            <option value="Australia/Lindeman">Australia/Lindeman</option>
                                            <option value="Australia/Adelaide">Australia/Adelaide</option>
                                            <option value="Australia/Darwin">Australia/Darwin</option>
                                            <option value="Australia/Perth">Australia/Perth</option>
                                            <option value="Australia/Eucla">Australia/Eucla</option>
                                            <option value="Asia/Baku">Asia/Baku</option>
                                            <option value="America/Barbados">America/Barbados</option>
                                            <option value="Asia/Dhaka">Asia/Dhaka</option>
                                            <option value="Europe/Brussels">Europe/Brussels</option>
                                            <option value="Europe/Sofia">Europe/Sofia</option>
                                            <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                            <option value="Asia/Brunei">Asia/Brunei</option>
                                            <option value="America/La_Paz">America/La_Paz</option>
                                            <option value="America/Noronha">America/Noronha</option>
                                            <option value="America/Belem">America/Belem</option>
                                            <option value="America/Fortaleza">America/Fortaleza</option>
                                            <option value="America/Recife">America/Recife</option>
                                            <option value="America/Araguaina">America/Araguaina</option>
                                            <option value="America/Maceio">America/Maceio</option>
                                            <option value="America/Bahia">America/Bahia</option>
                                            <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                                            <option value="America/Campo_Grande">America/Campo_Grande</option>
                                            <option value="America/Cuiaba">America/Cuiaba</option>
                                            <option value="America/Santarem">America/Santarem</option>
                                            <option value="America/Porto_Velho">America/Porto_Velho</option>
                                            <option value="America/Boa_Vista">America/Boa_Vista</option>
                                            <option value="America/Manaus">America/Manaus</option>
                                            <option value="America/Eirunepe">America/Eirunepe</option>
                                            <option value="America/Rio_Branco">America/Rio_Branco</option>
                                            <option value="America/Nassau">America/Nassau</option>
                                            <option value="Asia/Thimphu">Asia/Thimphu</option>
                                            <option value="Europe/Minsk">Europe/Minsk</option>
                                            <option value="America/Belize">America/Belize</option>
                                            <option value="America/St_Johns">America/St_Johns</option>
                                            <option value="America/Halifax">America/Halifax</option>
                                            <option value="America/Glace_Bay">America/Glace_Bay</option>
                                            <option value="America/Moncton">America/Moncton</option>
                                            <option value="America/Goose_Bay">America/Goose_Bay</option>
                                            <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                            <option value="America/Toronto">America/Toronto</option>
                                            <option value="America/Nipigon">America/Nipigon</option>
                                            <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                                            <option value="America/Iqaluit">America/Iqaluit</option>
                                            <option value="America/Pangnirtung">America/Pangnirtung</option>
                                            <option value="America/Atikokan">America/Atikokan</option>
                                            <option value="America/Winnipeg">America/Winnipeg</option>
                                            <option value="America/Rainy_River">America/Rainy_River</option>
                                            <option value="America/Resolute">America/Resolute</option>
                                            <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                            <option value="America/Regina">America/Regina</option>
                                            <option value="America/Swift_Current">America/Swift_Current</option>
                                            <option value="America/Edmonton">America/Edmonton</option>
                                            <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                            <option value="America/Yellowknife">America/Yellowknife</option>
                                            <option value="America/Inuvik">America/Inuvik</option>
                                            <option value="America/Creston">America/Creston</option>
                                            <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                            <option value="America/Fort_Nelson">America/Fort_Nelson</option>
                                            <option value="America/Vancouver">America/Vancouver</option>
                                            <option value="America/Whitehorse">America/Whitehorse</option>
                                            <option value="America/Dawson">America/Dawson</option>
                                            <option value="Indian/Cocos">Indian/Cocos</option>
                                            <option value="Europe/Zurich">Europe/Zurich</option>
                                            <option value="Africa/Abidjan">Africa/Abidjan</option>
                                            <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                            <option value="America/Santiago">America/Santiago</option>
                                            <option value="America/Punta_Arenas">America/Punta_Arenas</option>
                                            <option value="Pacific/Easter">Pacific/Easter</option>
                                            <option value="Asia/Shanghai">Asia/Shanghai</option>
                                            <option value="Asia/Urumqi">Asia/Urumqi</option>
                                            <option value="America/Bogota">America/Bogota</option>
                                            <option value="America/Costa_Rica">America/Costa_Rica</option>
                                            <option value="America/Havana">America/Havana</option>
                                            <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                            <option value="America/Curacao">America/Curacao</option>
                                            <option value="Indian/Christmas">Indian/Christmas</option>
                                            <option value="Asia/Nicosia">Asia/Nicosia</option>
                                            <option value="Asia/Famagusta">Asia/Famagusta</option>
                                            <option value="Europe/Prague">Europe/Prague</option>
                                            <option value="Europe/Berlin">Europe/Berlin</option>
                                            <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                            <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                            <option value="Africa/Algiers">Africa/Algiers</option>
                                            <option value="America/Guayaquil">America/Guayaquil</option>
                                            <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                            <option value="Europe/Tallinn">Europe/Tallinn</option>
                                            <option value="Africa/Cairo">Africa/Cairo</option>
                                            <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                            <option value="Europe/Madrid">Europe/Madrid</option>
                                            <option value="Africa/Ceuta">Africa/Ceuta</option>
                                            <option value="Atlantic/Canary">Atlantic/Canary</option>
                                            <option value="Europe/Helsinki">Europe/Helsinki</option>
                                            <option value="Pacific/Fiji">Pacific/Fiji</option>
                                            <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                                            <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                            <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                            <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                            <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                            <option value="Europe/Paris">Europe/Paris</option>
                                            <option value="Europe/London">Europe/London</option>
                                            <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                            <option value="America/Cayenne">America/Cayenne</option>
                                            <option value="Africa/Accra">Africa/Accra</option>
                                            <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                            <option value="America/Godthab">America/Godthab</option>
                                            <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                            <option value="America/Scoresbysund">America/Scoresbysund</option>
                                            <option value="America/Thule">America/Thule</option>
                                            <option value="Europe/Athens">Europe/Athens</option>
                                            <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                            <option value="America/Guatemala">America/Guatemala</option>
                                            <option value="Pacific/Guam">Pacific/Guam</option>
                                            <option value="Africa/Bissau">Africa/Bissau</option>
                                            <option value="America/Guyana">America/Guyana</option>
                                            <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                            <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                            <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                                            <option value="Europe/Budapest">Europe/Budapest</option>
                                            <option value="Asia/Jakarta">Asia/Jakarta</option>
                                            <option value="Asia/Pontianak">Asia/Pontianak</option>
                                            <option value="Asia/Makassar">Asia/Makassar</option>
                                            <option value="Asia/Jayapura">Asia/Jayapura</option>
                                            <option value="Europe/Dublin">Europe/Dublin</option>
                                            <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                            <option value="Asia/Kolkata">Asia/Kolkata</option>
                                            <option value="Indian/Chagos">Indian/Chagos</option>
                                            <option value="Asia/Baghdad">Asia/Baghdad</option>
                                            <option value="Asia/Tehran">Asia/Tehran</option>
                                            <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                            <option value="Europe/Rome">Europe/Rome</option>
                                            <option value="America/Jamaica">America/Jamaica</option>
                                            <option value="Asia/Amman">Asia/Amman</option>
                                            <option value="Asia/Tokyo">Asia/Tokyo</option>
                                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                                            <option value="Asia/Bishkek">Asia/Bishkek</option>
                                            <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                            <option value="Pacific/Enderbury">Pacific/Enderbury</option>
                                            <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                            <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                            <option value="Asia/Seoul">Asia/Seoul</option>
                                            <option value="Asia/Almaty">Asia/Almaty</option>
                                            <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                            <option value="Asia/Qostanay">Asia/Qostanay</option>
                                            <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                            <option value="Asia/Aqtau">Asia/Aqtau</option>
                                            <option value="Asia/Atyrau">Asia/Atyrau</option>
                                            <option value="Asia/Oral">Asia/Oral</option>
                                            <option value="Asia/Beirut">Asia/Beirut</option>
                                            <option value="Asia/Colombo">Asia/Colombo</option>
                                            <option value="Africa/Monrovia">Africa/Monrovia</option>
                                            <option value="Europe/Vilnius">Europe/Vilnius</option>
                                            <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                            <option value="Europe/Riga">Europe/Riga</option>
                                            <option value="Africa/Tripoli">Africa/Tripoli</option>
                                            <option value="Africa/Casablanca">Africa/Casablanca</option>
                                            <option value="Europe/Monaco">Europe/Monaco</option>
                                            <option value="Europe/Chisinau">Europe/Chisinau</option>
                                            <option value="Pacific/Majuro">Pacific/Majuro</option>
                                            <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                            <option value="Asia/Yangon">Asia/Yangon</option>
                                            <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                            <option value="Asia/Hovd">Asia/Hovd</option>
                                            <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                            <option value="Asia/Macau">Asia/Macau</option>
                                            <option value="America/Martinique">America/Martinique</option>
                                            <option value="Europe/Malta">Europe/Malta</option>
                                            <option value="Indian/Mauritius">Indian/Mauritius</option>
                                            <option value="Indian/Maldives">Indian/Maldives</option>
                                            <option value="America/Mexico_City">America/Mexico_City</option>
                                            <option value="America/Cancun">America/Cancun</option>
                                            <option value="America/Merida">America/Merida</option>
                                            <option value="America/Monterrey">America/Monterrey</option>
                                            <option value="America/Matamoros">America/Matamoros</option>
                                            <option value="America/Mazatlan">America/Mazatlan</option>
                                            <option value="America/Chihuahua">America/Chihuahua</option>
                                            <option value="America/Ojinaga">America/Ojinaga</option>
                                            <option value="America/Hermosillo">America/Hermosillo</option>
                                            <option value="America/Tijuana">America/Tijuana</option>
                                            <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                                            <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                            <option value="Asia/Kuching">Asia/Kuching</option>
                                            <option value="Africa/Maputo">Africa/Maputo</option>
                                            <option value="Africa/Windhoek">Africa/Windhoek</option>
                                            <option value="Pacific/Noumea">Pacific/Noumea</option>
                                            <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                            <option value="Africa/Lagos">Africa/Lagos</option>
                                            <option value="America/Managua">America/Managua</option>
                                            <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                            <option value="Europe/Oslo">Europe/Oslo</option>
                                            <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                            <option value="Pacific/Nauru">Pacific/Nauru</option>
                                            <option value="Pacific/Niue">Pacific/Niue</option>
                                            <option value="Pacific/Auckland">Pacific/Auckland</option>
                                            <option value="Pacific/Chatham">Pacific/Chatham</option>
                                            <option value="America/Panama">America/Panama</option>
                                            <option value="America/Lima">America/Lima</option>
                                            <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                            <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                            <option value="Pacific/Gambier">Pacific/Gambier</option>
                                            <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                            <option value="Pacific/Bougainville">Pacific/Bougainville</option>
                                            <option value="Asia/Manila">Asia/Manila</option>
                                            <option value="Asia/Karachi">Asia/Karachi</option>
                                            <option value="Europe/Warsaw">Europe/Warsaw</option>
                                            <option value="America/Miquelon">America/Miquelon</option>
                                            <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                            <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                            <option value="Asia/Gaza">Asia/Gaza</option>
                                            <option value="Asia/Hebron">Asia/Hebron</option>
                                            <option value="Europe/Lisbon">Europe/Lisbon</option>
                                            <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                            <option value="Atlantic/Azores">Atlantic/Azores</option>
                                            <option value="Pacific/Palau">Pacific/Palau</option>
                                            <option value="America/Asuncion">America/Asuncion</option>
                                            <option value="Asia/Qatar">Asia/Qatar</option>
                                            <option value="Indian/Reunion">Indian/Reunion</option>
                                            <option value="Europe/Bucharest">Europe/Bucharest</option>
                                            <option value="Europe/Belgrade">Europe/Belgrade</option>
                                            <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                            <option value="Europe/Moscow">Europe/Moscow</option>
                                            <option value="Europe/Simferopol">Europe/Simferopol</option>
                                            <option value="Europe/Kirov">Europe/Kirov</option>
                                            <option value="Europe/Astrakhan">Europe/Astrakhan</option>
                                            <option value="Europe/Volgograd">Europe/Volgograd</option>
                                            <option value="Europe/Saratov">Europe/Saratov</option>
                                            <option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
                                            <option value="Europe/Samara">Europe/Samara</option>
                                            <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                            <option value="Asia/Omsk">Asia/Omsk</option>
                                            <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                            <option value="Asia/Barnaul">Asia/Barnaul</option>
                                            <option value="Asia/Tomsk">Asia/Tomsk</option>
                                            <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                            <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                            <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                            <option value="Asia/Chita">Asia/Chita</option>
                                            <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                            <option value="Asia/Khandyga">Asia/Khandyga</option>
                                            <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                            <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                                            <option value="Asia/Magadan">Asia/Magadan</option>
                                            <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                            <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                                            <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                            <option value="Asia/Anadyr">Asia/Anadyr</option>
                                            <option value="Asia/Riyadh">Asia/Riyadh</option>
                                            <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                            <option value="Indian/Mahe">Indian/Mahe</option>
                                            <option value="Africa/Khartoum">Africa/Khartoum</option>
                                            <option value="Europe/Stockholm">Europe/Stockholm</option>
                                            <option value="Asia/Singapore">Asia/Singapore</option>
                                            <option value="America/Paramaribo">America/Paramaribo</option>
                                            <option value="Africa/Juba">Africa/Juba</option>
                                            <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                            <option value="America/El_Salvador">America/El_Salvador</option>
                                            <option value="Asia/Damascus">Asia/Damascus</option>
                                            <option value="America/Grand_Turk">America/Grand_Turk</option>
                                            <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                            <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                            <option value="Asia/Bangkok">Asia/Bangkok</option>
                                            <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                            <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                            <option value="Asia/Dili">Asia/Dili</option>
                                            <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                            <option value="Africa/Tunis">Africa/Tunis</option>
                                            <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                            <option value="Europe/Istanbul">Europe/Istanbul</option>
                                            <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                            <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                            <option value="Asia/Taipei">Asia/Taipei</option>
                                            <option value="Europe/Kiev">Europe/Kiev</option>
                                            <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                                            <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                                            <option value="Pacific/Wake">Pacific/Wake</option>
                                            <option value="America/New_York" selected>America/New_York</option>
                                            <option value="America/Detroit">America/Detroit</option>
                                            <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                            <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                            <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                            <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                            <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                                            <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                                            <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                            <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                            <option value="America/Chicago">America/Chicago</option>
                                            <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                            <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                            <option value="America/Menominee">America/Menominee</option>
                                            <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                                            <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                            <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                            <option value="America/Denver">America/Denver</option>
                                            <option value="America/Boise">America/Boise</option>
                                            <option value="America/Phoenix">America/Phoenix</option>
                                            <option value="America/Los_Angeles">America/Los_Angeles</option>
                                            <option value="America/Anchorage">America/Anchorage</option>
                                            <option value="America/Juneau">America/Juneau</option>
                                            <option value="America/Sitka">America/Sitka</option>
                                            <option value="America/Metlakatla">America/Metlakatla</option>
                                            <option value="America/Yakutat">America/Yakutat</option>
                                            <option value="America/Nome">America/Nome</option>
                                            <option value="America/Adak">America/Adak</option>
                                            <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                            <option value="America/Montevideo">America/Montevideo</option>
                                            <option value="Asia/Samarkand">Asia/Samarkand</option>
                                            <option value="Asia/Tashkent">Asia/Tashkent</option>
                                            <option value="America/Caracas">America/Caracas</option>
                                            <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                            <option value="Pacific/Efate">Pacific/Efate</option>
                                            <option value="Pacific/Wallis">Pacific/Wallis</option>
                                            <option value="Pacific/Apia">Pacific/Apia</option>
                                            <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                        </select>
                                    </div>
                                    <input type="hidden" id="date-hidden" name="appointment_date" value="{{old('appointment_date')}}">
                                    <input type="hidden" id="appointment_from-hidden" value="{{old('appointment_from')}}" name="appointment_from">
                                    <input type="hidden" id="appointment_to-hidden" value="{{old('appointment_to')}}" name="appointment_to">
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="form-group row mt-4">
                                    <div class="col-12 col-md-6">
                                        <div class="row no-gutters">
                                            <label>Patient Name <span class="required">*</span></label>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                        class="form-control custom-mainforminput @if($errors->get('first_name')) is-invalid @endif" name="first_name" id="first_name" value="{{old('first_name')}}" />
                                                    <p><small>First name</small></p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                        class="form-control custom-mainforminput @if($errors->get('middle_name')) is-invalid @endif" name="middle_name" id="middle_name" value="{{old('middle_name')}}" />
                                                    <p><small>Middle name</small></p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                        class="form-control custom-mainforminput @if($errors->get('last_name')) is-invalid @endif" name="last_name" id="last_name" value="{{old('last_name')}}" />
                                                    <p><small>Last name</small></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2">
                                        <label>Telephone <span class="required">*</span></label>
                                        <input type="tel"
                                            class="form-control custom-mainforminput @if($errors->get('telephone')) is-invalid @endif" name="telephone" id="telephone" value="{{old('telephone')}}" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="text" class="form-control custom-mainforminput @if($errors->get('email')) is-invalid @endif" value="{{old('email')}}" name="email" id="email" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-section last mb-5">
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Process and Continue To Patient Information"
                                        class="submitbtn nextprevbtn next" style="background: #ee1d25;" />
                                </div>
                            </div>
                            <div class="logos-form w-100 position-absolute">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div><img src="{{ asset('public/theme-resources/images/logo.png ')}}" /></div>
                                    <div><img src="{{ asset('public/theme-resources/images/hipaa-badge.png')}}" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-sec">
                            <div class="top-section">
                                <h2>PedIM Healthcare - Patient Information</h2>
                            </div>
                            <div class="form-section no-border">
                                <div class="form-group row mt-4">
                                    <div class="col-12 col-md-6">
                                        <div class="row no-gutters">
                                            <label>Patient Name <span class="required">*</span></label>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                        class="form-control custom-mainforminput @if($errors->get('patient_fname')) is-invalid @endif" name="patient_fname" id="patient_fname" value="{{old('patient_fname')}}" />
                                                    <p><small>First name</small></p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                        class="form-control custom-mainforminput @if($errors->get('patient_mname')) is-invalid @endif" name="patient_mname" id="patient_mname" value="{{old('patient_mname')}}" />
                                                    <p><small>Middle name</small></p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="padding-wrap">
                                                    <input type="text"
                                                        class="form-control custom-mainforminput @if($errors->get('patient_lname')) is-invalid @endif" name="patient_lname" id="patient_lname" value="{{old('patient_lname')}}" />
                                                    <p><small>Last name</small></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-2">
                                        <div class="padding-wrap">
                                            <label>Date of birth</label>
                                            <input type="text" value="{{old('dob')}}"
                                                class="form-control custom-mainforminput dobpicker  @if($errors->get('dob')) is-invalid @endif"
                                                name="dob" id="dob" readonly />
                                        </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-md-3">
                                        <div class="padding-wrap">
                                            <label>Is Patient a Minor? <span class="required">*</span></label><br />
                                            <label class="mt-2"><input type="radio" class="mr-2" name="is_patient_minor" id="is_patient_minor" value="yes" <?php if(old('accept_financial_policy') == 'yes'){ echo 'checked';}?>>Yes</label>
                                            <label class="mt-2"><input type="radio" class="mr-2"name="is_patient_minor" id="is_patient_minor"value="no" <?php if(old('accept_financial_policy') == 'no'){ echo 'checked';}?>>No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row margin-top">
                                    <div class="col-12 col-md-10">
                                        <label>Symptoms you are experiencing <span class="required">*</span></label>
                                        <textarea class="form-control custom-mainforminput @if($errors->get('symptoms')) is-invalid @endif" rows="5" name="symptoms" id="symptoms">{{old('symptoms')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <label>Responsible Party (If Minor)</label>
                                        <input type="text" class="form-control custom-mainforminput @if($errors->get('patient_responsible_part')) is-invalid @endif" name="patient_responsible_part" id="patient_responsible_part" value="{{old('patient_responsible_part')}}">
                                        <p><small>Enter Full Legal Name
                                            </small></p>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <label>Full Name of Insurance Subscriber</label>
                                        <input type="text" class="form-control custom-mainforminput @if($errors->get('patient_insurance_subscriber')) is-invalid @endif" name="patient_insurance_subscriber" id="patient_insurance_subscriber" value="{{old('patient_insurance_subscriber')}}">
                                    </div>
                                    <div class="col-12  col-sm-4 col-md-2">
                                        <label>Relation to patient</label>
                                        <input type="text" class="form-control custom-mainforminput  @if($errors->get('relation_patient')) is-invalid @endif" name="relation_patient" id="relation_patient"
                                            value="{{old('relation_patient')}}">
                                        <p><small>Self, Father, Mother, Son, etc.
                                            </small></p>
                                    </div>
                                    <div class="col-12  col-sm-4 col-md-2">
                                        <label>Telephone <span class="required">*</span></label>
                                        <input type="tel" class="form-control custom-mainforminput  @if($errors->get('patient_telephone')) is-invalid @endif" name="patient_telephone" id="patient_telephone" value="{{old('patient_telephone')}}" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                    </div>
                                    <div class="col-12  col-sm-4 col-md-2">
                                        <label>Patient Email <span class="required">*</span></label>
                                        <input type="email" class="form-control custom-mainforminput  @if($errors->get('patient_email')) is-invalid @endif" name="patient_email" id="patient_email" value="{{old('patient_email')}}">
                                    </div>
                                </div>
                                <div class="form-group  row mt-4">
                                    <div class="col-12    col-sm-6 col-md-3">
                                        <label>Primary Insurance Company</label>
                                        <input type="text" class="form-control custom-mainforminput  @if($errors->get('patient_primary_insurance_company')) is-invalid @endif" name="patient_primary_insurance_company" id="patient_primary_insurance_company"
                                            value="{{old('patient_primary_insurance_company')}}">
                                    </div>
                                    <div class="col-12   col-sm-6 col-md-3">
                                        <label>Secondary Insurance Company</label>
                                        <input type="text" class="form-control custom-mainforminput  @if($errors->get('patient_secondary_insurance_company')) is-invalid @endif" name="patient_secondary_insurance_company" id="patient_secondary_insurance_company"
                                            value="{{old('patient_secondary_insurance_company')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div id="accordion" class="custom-accordion">

                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                                Financial Policy | Lifetime Authorization | Privacy Practices
                                                Acknowledgement
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-input-wide">
                                                    <div class="form-html">
                                                        <p style="text-align: center;"><span
                                                                style="font-size: 12pt;"><strong>Financial
                                                                    Policy</strong></span></p>
                                                        <p>WELCOME TO QCM Healthcare!</p>
                                                        <p>Our staff is committed to providing you with excellence in
                                                            care, not only in the medical, but also the financial area.
                                                            In order to achieve this goal, we feel it necessary to
                                                            clarify our payment policy.</p>
                                                        <p>First of all,&nbsp;QCM is&nbsp;primary care facility.</p>
                                                        <p>As such, some of the billing rules/regulations vary from
                                                            those to which you may have become accustomed. Several of
                                                            our insurance carriers have required contracts that have
                                                            necessitated “global billing”, meaning that any service
                                                            performed within the facility will be covered by one
                                                            fee-regardless of the level of service. Others do not, and
                                                            are billed in the manner to which you are probably familiar.
                                                            Self-Pay patients are served at a reduced rate for the
                                                            visit, but are charged “ala carte” for any additional
                                                            service that the provider feels necessary to supply
                                                            excellent patient care.<br><br></p>
                                                        <p>PAYMENT IS DUE AT THE TIME SERVICES ARE RENDERED</p>
                                                        <p>For your convenience, at our in-office visit, we accept cash,
                                                            personal checks, Visa, MasterCard and Discover. For our
                                                            online transactions, we accept, credit cards and atm cards.
                                                            This information will be held securely within our payment
                                                            processing center in compliance with all state and federal
                                                            laws. Although we make every effort at each visit to collect
                                                            as per individualized insurance contracts, we reserve the
                                                            right to use the on-file payment information to retrieve the
                                                            appropriate funds if there is any payment difference once
                                                            the claim has processed. Of course, this would only take
                                                            place after first contacting you. The advantage to this
                                                            policy is that it will eliminate the need for you to mail or
                                                            call in payments, and will minimize the need for us to send
                                                            out statements. The combination effect should benefit
                                                            everyone in an effort to keep the cost of healthcare down,
                                                            and will in no way hinder your right to dispute a charge or
                                                            question your insurance company’s determination of payment.
                                                        </p>
                                                        <p>&nbsp;</p>
                                                        <p>**Please note: Declined payments by check or credit/debit
                                                            cards are subject to a minimum $35.00 service charge. Loss
                                                            of further check writing privileges is at our
                                                            discretion.<br><br></p>
                                                        <p>COMMERCIAL INSURANCE</p>
                                                        <p>We are participating providers with several commercial
                                                            insurances including: Blue Cross Blue Shield, Aetna, CIGNA,
                                                            United Healthcare, UMR, Golden Rule, and Optimum. We also
                                                            participate with carriers that are repriced by PHCS,
                                                            Multiplan, and Beech Street. However, should we not be in
                                                            your network, there are non-participating benefits
                                                            available, we will be happy to file the insurance with your
                                                            understanding that the plan will probably pay less and
                                                            require an increased patient responsibility. If there is a
                                                            question as to our participation status, please contact your
                                                            carrier for more information.</p>
                                                        <p>&nbsp;</p>
                                                        <p>MEDICARE / MEDICARE ADVANTAGE PLANS</p>
                                                        <p>We are Medicare Part B providers. Your deductible and/or 20%
                                                            coinsurance is due at the time of service unless a
                                                            verifiable supplemental coverage is on file. We are
                                                            participating with United Healthcare Medicare Advantage, and
                                                            AARP/Medicare Complete replacement plans. As there are
                                                            several others of these types of plans, it is up to the
                                                            patient to check our participation status with their
                                                            carrier. Copays and/or coinsurances are due at the time of
                                                            service. Please notify our staff if authorizations are
                                                            necessary for any part of your care.</p>
                                                        <p>&nbsp;</p>
                                                        <p>TRICARE / TRICARE FOR LIFE / CHAMPVA</p>
                                                        <p>Although we are currently only participating with Tricare
                                                            Standard, it is our goal to further serve our military
                                                            families by accepting Tricare Prime. Prime patients are
                                                            required to get prior authorization in order to enjoy
                                                            the&nbsp;Primary Care copay benefit. Those who fail to begin
                                                            that process will be subject to the POS deductible and
                                                            coinsurance required by the carrier. CHAMPVA and Tricare
                                                            Standard patients must meet the deductible and coinsurance
                                                            requirements of their plans. All “cost shares” are payable
                                                            at the time of service.&nbsp; We also accept Tricare for
                                                            Life for our Medicare primary patients.</p>
                                                        <p>&nbsp;</p>
                                                        <p>MEDICAID</p>
                                                        <p>Our providers accept Medicaid. Although all of our facilities
                                                            are currently contracted with the Staywell, United
                                                            Healthcare, and CMS Ped-I-Care Medicaid products. Share of
                                                            Cost and Medically Needy patients are accepted, but are
                                                            considered “Self-Pay” until proof of coverage and
                                                            eligibility has been provided. It is the patient’s
                                                            responsibility to submit their charges to their caseworker
                                                            for tracking. Please check with the&nbsp;Billing
                                                            Department&nbsp;if you have any questions.</p>
                                                        <p>&nbsp;</p>
                                                        <p>***Should you choose not to present your insurance and,
                                                            instead, be treated as a “Self-Pay” patient, you will be
                                                            asked to sign a waiver stating that your charges will not be
                                                            submitted to your insurance for reimbursement. This will
                                                            avert any reimbursement confusion by the carrier, and avoid
                                                            the contractual allowances that will ultimately increase the
                                                            amount owed by the patient upon claims processing.</p>
                                                        <p>&nbsp;<br>&nbsp;</p>
                                                        <p>I, <strong><span
                                                                    class="replaceTag 125_responsibleParty127"></span></strong>,
                                                            acknowledge that I have
                                                            read and understand the above&nbsp;QCM financial policies.
                                                        </p>
                                                        <p>&nbsp;</p>
                                                        <p>I understand that this signature remains in effect until such
                                                            time as a written request is submitted revoking the
                                                            authorization for the use of my payment information in the
                                                            quest for reimbursement.</p>
                                                    </div>
                                                </div>
                                                <div class="custom-divider">
                                                </div>
                                                <div class="form-input-wide">
                                                    <div class="form-html">
                                                        <p style="text-align: center;"><span
                                                                style="font-size: 12pt;"><strong>Lifetime
                                                                    Authorization</strong></span></p>
                                                        <p style="text-align: center;"><strong>Insurance Assignments and
                                                                Authorization to Release Information</strong></p>
                                                        <p><strong>1. RELEASE OF INFORMATION:</strong> I, the
                                                            below-named patient, do hereby authorize any provider
                                                            examining and/or treating me to release to any third party
                                                            payer (such as insurance companies or governmental agencies,
                                                            ex: Medicare or Blue cross Blue Shield), any medical ,
                                                            psychiatric condition, alcohol or drug related condition,
                                                            and records concerning diagnosis and treatment when
                                                            requested by such third party payer for its use in
                                                            connection with determining a claim for payment for such
                                                            treatment and/or diagnosis.<br><br><strong>2. PROVIDER
                                                                INSURANCE ASSIGNMENT:</strong> I, the below-named
                                                            subscriber, hereby authorize payment directly to any
                                                            provider examining or treating me of any group and/or
                                                            individual surgical and/or medical benefits herein
                                                            specified, and otherwise payable to me for their services as
                                                            described, but not to exceed the reasonable and customary
                                                            charge for these services.<br><br><strong>3.
                                                                MEDICARE/MEDICAID:</strong> The patient certification
                                                            authorization to release information and payment request: I
                                                            certify the information given by me in applying for payment
                                                            under Title XVIII/XIX of the Social Security Act is correct.
                                                            I authorize any holder of medical or other information about
                                                            me to release to the Social Security Administration/Division
                                                            of Family Services, or its Intermediaries or carriers, any
                                                            information needed for this of a Medicare/Medicaid claim. I
                                                            certify that all insurance pertaining to treatment shall be
                                                            assigned to the treating provider.<br><br><strong>4. I
                                                                permit a copy of this authorization for release of
                                                                information and assignment of benefits to be used in
                                                                place of the original which is on file at the provider’s
                                                                office.</strong> This assignment will remain in effect
                                                            until such time as it revoked by me in
                                                            writing.<br><br>***Although we may participate with your
                                                            insurance carrier, please remember that your insurance
                                                            benefit is a contract between you and your insurance
                                                            company, not the provider and your insurance company.
                                                            Insurance is a method of reimbursing patients for fees paid
                                                            to the doctor, and is not a substitute for payment of
                                                            services. Some companies pay fixed allowables for certain
                                                            procedures, and others pay a percentage of the charge.
                                                            <strong>I understand that it is my responsibility to pay any
                                                                deductible amount, coinsurance, copay, or any other
                                                                balance not paid by my carrier within a reasonable
                                                                period of time.</strong></p>
                                                        <p><strong>***If this account is sent to a collection agency, or
                                                                assigned to a collection attorney for collection and/or
                                                                suit, the prevailing party shall be entitled to
                                                                reasonable attorney’s fees and costs of collection.
                                                            </strong></p>
                                                    </div>
                                                </div>
                                                <div class="custom-divider">
                                                </div>
                                                <div class="form-input-wide">
                                                    <div class="form-html">
                                                        <p style="text-align: center;"><strong>NOTICE OF PRIVACY
                                                                PRACTICES ACKNOWLEDGEMENT</strong></p>
                                                        <p><br>I understand that, under the Health Insurance Portability
                                                            and Accountability Act of 1996 (HIPAA), I have certain
                                                            rights to privacy regarding my Protected Health Information
                                                            (PHI). I understand that this information can, and will, be
                                                            used to:</p>
                                                        <p style="padding-left: 30px;">Conduct, plan, and direct my
                                                            treatment and follow-up among the multiple healthcare
                                                            providers who may be involved in that treatment both
                                                            directly and indirectly.</p>
                                                        <p style="padding-left: 30px;"><br>Obtain payment from
                                                            third-party payers.</p>
                                                        <p style="padding-left: 30px;"><br>Conduct normal healthcare
                                                            operations such as quality assessments and physician
                                                            certifications.</p>
                                                        <p><br>I acknowledge that I have been offered a copy of your
                                                            Notice of Privacy Practices containing a more complete
                                                            description of the uses and disclosures of my health
                                                            information. I understand that this organization has the
                                                            right to change the Notice of Privacy Practices from time to
                                                            time, and that I may contact QCM Healthcare&nbsp;at any
                                                            time to obtain a current copy of the Notice of Privacy
                                                            Practices.</p>
                                                        <p>I understand that I may request, in writing, that you
                                                            restrict how my private information is used or disclosed to
                                                            carry out treatment, payment, or healthcare operations. I
                                                            also understand that you are not required to agree to my
                                                            requested restrictions, but, if you do agree, then you are
                                                            bound to abide to such restrictions.<br><br>Patient
                                                            Name:&nbsp;<strong><span
                                                                    class="replaceTag 148_patientLegal"></span></strong>
                                                        </p>
                                                        <p>Relationship to Patient:&nbsp;<strong><span
                                                                    class="replaceTag 148_relationTo"></span></strong>
                                                        </p>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-section no-border">
                                        <p>By clicking Accept, I, acknowledge and agree to the above section, titled
                                            Financial Policy | Lifetime Authorization | Privacy Practices
                                            Acknowledgement</p>
                                        <div class="form-group row mt-4">
                                            <div class="col-12 col-md-2">
                                                <div class="padding-wrap">
                                                    <label>Click To Accept <span class="required">*</span></label><br />
                                                    <label class="mt-2"><input type="checkbox" class="mr-2" id="accept_financial_policy" name="accept_financial_policy"  value="yes" <?php if(old('accept_financial_policy') == 'yes'){ echo 'checked';}?>>Accept</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-2">
                                                <div class="padding-wrap">
                                                    <label>Date</label>
                                                    <input type="text"
                                                        class="form-control custom-mainforminput todayDatePicker @if($errors->get('fp_date')) is-invalid @endif" value="{{old('fp_date')}}" name="fp_date" id="fp_date" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                Consent for Treatment - Adults
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-input-wide">
                                                    <div class="form-html">
                                                        <p style="text-align: center;"><strong>Consent for Treatment for
                                                                Adult</strong></p>
                                                        <p>I, <strong><span
                                                                    class="replaceTag 114_responsibleParty127"></span></strong>,
                                                            hereby authorize Pediatric and Internal Medicine
                                                            Specialists, Inc, it’s affiliated physicians and other
                                                            medical personnel in charge of my care to administer
                                                            examinations, immunizations, treatments and view my
                                                            prescription history from an external source and
                                                            telemedicine services as needed or requested by the patient
                                                            that may be deemed medically necessary in the exercise of
                                                            their professional judgment. Additionally, by signing this
                                                            form I acknowledge that I have received a copy of the
                                                            Privacy Policies and Financial Responsibility Policy for the
                                                            office of Pediatric and Internal Medicine Specialists, Inc.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                                Consent for Treatment - Minors
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-input-wide">
                                                    <div class="form-html">
                                                        <p style="text-align: center;"><strong>Consent for Treatment of
                                                                Minor</strong></p>
                                                        <p>I, <strong><span class="replaceTag 117_responsibleParty127"
                                                                    default=""></span></strong>, hereby authorizes
                                                            Pediatric and Internal Medicine Specialists, Inc, it’s
                                                            affiliated physicians and other medical personnel in charge
                                                            of my child's, <strong><span
                                                                    class="replaceTag 117_patientLegal"
                                                                    default=""></span></strong>, care to administer
                                                            examinations, immunizations, treatments, telemedicine
                                                            services as needed or by patient request and view my
                                                            prescription history from an external source as may be
                                                            deemed medically necessary in the exercise of their
                                                            professional judgment. Additionally, by signing this form I
                                                            acknowledge that I have received a copy of the Privacy
                                                            Policies and Financial Responsibility Policy for the office
                                                            of Pediatric and Internal Medicine Specialists, Inc.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <p>By clicking Accept, I, acknowledge and agree to the Consent for Treatment.
                                        </p>
                                        <div class="form-group row mt-4">
                                            <div class="col-12 col-md-2">
                                                <div class="padding-wrap">
                                                    <label>Click To Accept <span class="required">*</span></label><br />
                                                    <label class="mt-2"><input type="checkbox" class="mr-2" id="accept_consent_for_treatment" name="accept_consent_for_treatment" value="accept" <?php if(old('accept_consent_for_treatment') == 'yes'){ echo 'checked';}?>>Accept</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="padding-wrap">
                                                    <label>Date</label>
                                                    <input type="text" class="form-control custom-mainforminput todayDatePicker @if($errors->get('cft_date')) is-invalid @endif" name="cft_date" id="cft_date" value="{{old('cft_date')}}"  />
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>


                            <div class="form-group row mt-4">
                                <div class="col-12">
                                    <div class="padding-wrap">
                                        <label>How did you hear about us? <span
                                                    class="required">*</span></label><br />
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2" id="hear_about_us" name="hear_about_us" value="Google" <?php if(old('hear_about_us') == 'Google'){ echo 'checked';}?>>Google</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2" id="hear_about_us" name="hear_about_us" value="Facebook" <?php if(old('hear_about_us') == 'Facebook'){ echo 'checked';}?>>Facebook</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2" id="hear_about_us" name="hear_about_us" value="Website" <?php if(old('hear_about_us') == 'Website'){ echo 'checked';}?>>Website</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2" id="hear_about_us" name="hear_about_us" value="Email" <?php if(old('hear_about_us') == 'Email'){ echo 'checked';}?>>Email</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2" id="hear_about_us" name="hear_about_us" value="Friends/Family" <?php if(old('hear_about_us') == 'Friends/Family'){ echo 'checked';}?>>Friends/Family</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2"  id="hear_about_us"  name="hear_about_us" value="Billboard" <?php if(old('hear_about_us') == 'Billboard'){ echo 'checked';}?>>Billboard</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2"  id="hear_about_us"  name="hear_about_us" value="Radio" <?php if(old('hear_about_us') == 'Radio'){ echo 'checked';}?>>Radio</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2"><input type="radio" class="mr-2"  id="hear_about_us"  name="hear_about_us" value="Drove By" <?php if(old('hear_about_us') == 'Drove By'){ echo 'checked';}?>>Drove By</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class="mt-2 d-flex align-items-center"><input type="radio" class="mr-2" id="hear_about_us"  name="hear_about_us" value="Other" <?php if(old('Other') == 'yes'){ echo 'checked';}?>>
                                                    <input type="text" class="form-control custom-mainforminput otherfield"  placeholder="Other" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-section last mb-5">
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Submit to complete"
                                        class="submitbtn" style="background: #ee1d25;" />
                                </div>
                            </div>
                            <div class="logos-form w-100 position-absolute">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div><img src="{{ asset('public/theme-resources/images/logo.png ')}}" /></div>
                                    <div><img src="{{ asset('public/theme-resources/images/hipaa-badge.png')}}" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </main>
    </div>

    <script>
        var base_url = '{{ url('/') }}';
        selectElement('visit_type', '{{old('visit_type')}}');
        // selectElement('membership_type', '{{old('membership_type')}}'); 
        // selectElement('gender', '{{old('gender')}}');
        IsMinorPatientFunction();
        
        function IsMinorPatientFunction()
        {
            //alert('{{old('is_patient_minor')}}');
            var value = "{{old('is_patient_minor')}}";
            if(value == 'yes')
            {
            //   var element = document.getElementsByClassName("showIfMinor");
            //   element.classList.toggle("d-none");
                
                $('.showIfMinor').toggleClass('d-none')
            }
            
        }

        $('.submitbtn').on('click',function(){

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

</body>

</html>