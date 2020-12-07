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

                <div class="top-section">
                    <h2>Consent for Treatment of a Minor</h2>
                </div>

                <div class="form-section">
                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-6">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Parent Full Name
                                        <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="parent_name" id="parent_name"
                                               value="" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label>Minor Ful Name <span class="required">*</span></label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="mionr_name" id="minor_name"
                                               value="" />

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="form-section">
                        <p>I, , the parent or legal guardian of give permission for the following individuals, in my absence, to accompany and make decisions for my child.
                            In addition, the listed authorized person(s) have permission to discuss medical information regarding my child..</b>
                        </p>
                    </div>


                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name of Authorized Person
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_a1" id="full_name_a1"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Relation </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation1" id="relation1"
                                               value="" />

                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone1" id="telephone1" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">


                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name of Authorized Person
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_a2" id="full_name_a2"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Relation </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation2" id="relation2"
                                               value="" />

                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone2" id="telephone2" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">


                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name of Authorized Person
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_a3" id="full_name_a3"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Relation </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation3" id="relation3"
                                               value="" />

                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone3" id="telephone3" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">


                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name of Authorized Person
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_a4" id="full_name_a4"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Relation </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation4" id="relation4"
                                               value="" />

                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone4" id="telephone4" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name of Authorized Person
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_a5" id="full_name_a5"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Relation </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation5" id="relation5"
                                               value="" />

                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone5" id="telephone5" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                    <label>Full Name of Authorized Person
                                    </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="full_name_a6" id="full_name_a6"
                                               value="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Relation </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="relation6" id="relation6"
                                               value="" />

                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label>Telephone </label>
                                    <div class="padding-wrap">
                                        <input type="tel"
                                               class="form-control custom-mainforminput "
                                               name="telephone6" id="telephone6" value=""
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div data-component="divider" style="border-bottom:1px solid #e6e6e6;">


                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-12 col-md-12">

                            <div class="row no-gutters">
                                <div class="col-12 col-md-4">
                                        <label>Signature Parent/Guardian <span class="required">*</span> </label>
                                        <div>
                                            <div  id="sig"  ></div>  <br/>
                                        </div>

                                        <span id="clear" class="clearButton" role="button" tabindex="2" style=" margin-right:10px; float: right; text-decoration: underline; color: black; text-decoration-style: solid">Clear</span>
                                        <textarea id="signature64" name="signed" style="display: none"></textarea>

                                </div>

                                <div class="col-12 col-md-3">

                                    <label >Date<span class="required">*</span></label>
                                    <input type="text" value=""
                                           class="form-control custom-mainforminput dobpicker  "
                                           name="date" id="date" readonly />

                                    <label style="margin-top: 10px;">Printed Name Parent/Guardian </label>
                                    <div class="padding-wrap">
                                        <input type="text"
                                               class="form-control custom-mainforminput "
                                               name="printed_name" id="printed_name"
                                               value="" />
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>


                </div>
                <div class="form-section last mb-5">
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Submit"
                               id="signaturebtn "
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
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});

    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
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

<script src="{{ asset('public/theme-resources/js/main.js') }}"></script>


<script src="{{ asset('public/theme-resources/js/numeric-1.2.6.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/bezier.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/jquery.signaturepad.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/json2.min.js') }}"></script>
<script src="{{ asset('public/theme-resources/js/html2canvas.js') }}"></script>



</body>

</html>