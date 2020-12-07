
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

    <!--Scripts of Signatures-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <!--Scripts of Signatures-->
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


                <div class="top-section">
                    <span style="float: right;color: blue; text-decoration: underline;"><a href="https://sicknwellforms.thqcompany.com/QcardSelfPaySubscription/1">English</a></span>
                    <h2>Qcard Registro</h2>

                </div>

                <div class="form-section">
                    <p>Regístrese para obtener la Qcard y obtenga servicios médicos en cualquiera de nuestras 10 ubicaciones de Quick Care Med. Conviértase en miembro por solo $1 por día, más un copago de $10 cuando visite.
                        Ubicaciones disponibles en los condados de Citrus, Marion, Alachua y Levy.</b>
                    </p>
                </div>

                <div class="form-section">
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="cok-12 col-md-4">
                                <div class="padding-wrap">
                                    <label>¿Está de acuerdo con los términos y condiciones?
                                        <span class="required">*</span> </label></div>
                                <label class="mt-2"><input type="checkbox"
                                                           name="answer" value="yes">
                                    Si</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="cok-12 col-md-8">
                                <div class="padding-wrap">
                                    <label>Plan de Membresía Qcard</label></div>
                                <label class="mt-2"><input type="radio"
                                                           name="answer" value="yes" checked>
                                    Termino inicial de suscripción: $ 90.00 por los primeros 90 días, y después $ 30.00 mensual</label>
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
                                               class="form-control custom-mainforminput "
                                               name="email" id="email"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Primer Nombre <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="first_name" id="first_name"
                                               value="" />
                                    </div>
                                </div>


                                <div class="col-12 col-md-4">
                                    <label>Apellido <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="last_name" id="last_name"
                                               value="" />
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                    <p>Por favor tenga en cuenta, que un representante de Qcard le llamara para programar el pago,
                        y contestar cualquier pregunta que usted tenga.</p>



                </div>

                <div class="form-group row mt-4">
                    <div class="col-12 col-md-6">
                        <h2>Miembro</h2>
                    </div>
                </div>

                <div class="form-section">
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Nombre Completo <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name" id="full_name"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Teléfono <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone" id="telephone" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Correo Electrónico <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="patient_email" id="patient_email"
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
                                    <label>Dirección <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="address" id="address"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Ciudad <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="city" id="city" value=""
                                        />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Estado <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="state" id="state"
                                               value="" />
                                    </div>
                                </div>


                                <div class="col-12 col-md-2">
                                    <label>Estado <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="zip" id="zip"
                                               value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row no-gutters">
                        <div class="col-12 col-md-2">
                            <div class="padding-wrap">
                                <label>Fecha de Nacimiento</label>
                                <input type="text" value=""
                                       class="form-control custom-mainforminput dobpicker  "
                                       name="dob" id="dob" readonly />
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">
                            <h2>Miembro/Persona Responsable</h2>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-2">
                                    <label>Nombre Completo<span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_m" id="full_name_m"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Telefono <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone_m" id="telephone_m" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                                <div class="col-12 col-md-2">
                                    <label>Correo Electrónico <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="email"
                                               class="form-control custom-mainforminput "
                                               name="patient_email_m" id="patient_email_m"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <label>Relación con el paciente (si no es usted)
                                        <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation_patient" id="relation_patient"
                                               value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label class="" >Firma<span class="required">*</span></label>
                                    <div id="sig1"></div>  <br/>

                                    <span id="clear1" class="clearButton" role="button" tabindex="2" style="float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                    <textarea id="signature641" name="signed" style="display: none"></textarea>
                                </div>


                                <div class="col-12 col-md-2">

                                    <div class="padding-wrap">
                                        <label>Fecha de Hoy</label>
                                        <input type="text" value=""
                                               class="form-control custom-mainforminput dobpicker  "
                                               name="todate" id="todate" readonly />
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>



                    <!--  <div data-component="divider" style="border-bottom:1px solid #e6e6e6;">


                      </div>-->



                </div>
                <div class="form-section last mb-5">
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Enviar"
                               id="signaturebtn"
                               class="submitbtn" style="background: red;" />
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
    var base_url = 'http://sicknwellforms.desenador.com';
    // selectElement('visit_type', '');
    // selectElement('membership_type', '');
    // selectElement('gender', '');
    IsMinorPatientFunction();

    function IsMinorPatientFunction()
    {
        //alert('');
        var value = "";
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


<script src="{{ asset('public/theme-resources/js/numeric-1.2.6.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bezier.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.signaturepad.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/json2.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/html2canvas.js') }}"></script>



</body>

</html>