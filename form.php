<!doctype html>
<html lang="en">
<head> 
    <title>Laravel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/all.min.css" />
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/noty.css" />
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/noty-bootstrap-v4.css" />
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/style.css" />
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/responsive.css" />
    <link rel="stylesheet" href="https://islands.network/sicknwell-forms-templete/public/theme-resources/css/main-form.css" />
    <script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="wrapper d-flex flex-column">
        <main class="flex-1 d-flex">
    <style>
    body {
            overflow-y: auto;
        } 
    </style>
    <script>
    
    </script>
    <div class="qcm-form" >
    <form method="post" action="https://islands.network/sicknwell-forms-templete/QcmTelemedicineForm/create">
            <input type="hidden" name="_token" value="HC32yBXxjtQ8qAioS2gJP8x1xWsMzRXr75QNtUzv">
            <input type="hidden" value="46" id="client_forms_id" name="client_forms_id">
            <div class="top-section">
                <h2>QCM - Telemedicine</h2>
                <p>Schedule your appointment.</p>
            </div>
            <div class="form-section">
                <p>Your well being is our priority. Request your appointment below and you will be able to do a Telemedicine Consultation with a medical provider. You can use your smart telephone, tablet or desktop. If you are using a desktop system,
                    then please verify that your Camera, Speakers and Microphone are in working order.<br /><br /> We are currently accepting telemedicine appointments from 10:00 AM to 4:00 PM | Monday thru Friday. <br /><b>Confirmation Emails with exact appointment
                time is sent during regular business hours.Please be patient, while we schedule an available healthcare provider to see you.</b>
                </p>
                <div class="form-group row margin-top">
                    <div class="col-12 col-md-4">
                        <label>Visit Type <span class="required">*</span></label>
                        <select class="form-control custom-mainforminput" name="visit_type"  id="visit_type">
                            <option value="">  </option>
                            <option value="Covid-19 (Coronavirus) Screening"> Covid-19 (Coronavirus) Screening </option>
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
                    <div class="col-12 col-md-8">
                        <label>Description of issue <span class="required">*</span></label>
                        <textarea class="form-control custom-mainforminput" rows="5" name="description"  id="description"></textarea>
                    </div>
                </div>
                <h4>Select a <u>2 hour appointment window</u> | <u>Appointments - Monday thru Friday Only.</u></h4>
                <p class="mt-1">Your exact appointment time will be confirmed via email. </p>
                <div class="form-group row margin-top">
                    <div class="col-12 col-md-3">
                        <label>From Time <span class="required">*</span></label>
                        <select class="form-control custom-mainforminput"  name="appointment_from"  id="appointment_from">
                            <option value="">  </option>
                            <option value="10:00"> 10:00 AM</option>
                            <option value="10:15"> 10:15 AM </option>
                            <option value="10:30"> 10:30 AM </option>
                            <option value="10:45"> 10:45 AM </option>
                            <option value="11:00"> 11:00 AM </option>
                            <option value="11:15"> 11:15 AM </option>
                            <option value="11:30"> 11:30 AM </option>
                            <option value="11:45"> 11:45 AM </option>
                            <option value="12:00"> 12:00 PM </option>
                            <option value="12:15"> 12:15 PM </option>
                            <option value="12:30"> 12:30 PM </option>
                            <option value="12:45"> 12:45 PM </option>
                            <option value="13:00"> 01:00 PM </option>
                            <option value="13:15"> 01:15 PM </option>
                            <option value="13:30"> 01:30 PM </option>
                            <option value="13:45"> 01:45 PM </option>
                            <option value="14:00"> 02:00 PM </option>
                            <option value="14:15"> 02:15 PM </option>
                            <option value="14:30"> 02:30 PM </option>
                            <option value="14:45"> 02:45 PM </option>
                            <option value="15:00"> 03:00 PM </option>
                            <option value="15:15"> 03:15 PM </option>
                            <option value="15:30"> 03:30 PM </option>
                            <option value="15:45"> 03:45 PM </option>
                            <option value="16:00"> 04:00 PM </option>
                            </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label>To Time <span class="required">*</span></label>
                        <select class="form-control custom-mainforminput" name="appointment_to"  id="appointment_to">
                            <option value="">  </option>
                            <option value="10:00"> 10:00 AM</option>
                            <option value="10:15"> 10:15 AM </option>
                            <option value="10:30"> 10:30 AM </option>
                            <option value="10:45"> 10:45 AM </option>
                            <option value="11:00"> 11:00 AM </option>
                            <option value="11:15"> 11:15 AM </option>
                            <option value="11:30"> 11:30 AM </option>
                            <option value="11:45"> 11:45 AM </option>
                            <option value="12:00"> 12:00 PM </option>
                            <option value="12:15"> 12:15 PM </option>
                            <option value="12:30"> 12:30 PM </option>
                            <option value="12:45"> 12:45 PM </option>
                            <option value="13:00"> 01:00 PM </option>
                            <option value="13:15"> 01:15 PM </option>
                            <option value="13:30"> 01:30 PM </option>
                            <option value="13:45"> 01:45 PM </option>
                            <option value="14:00"> 02:00 PM </option>
                            <option value="14:15"> 02:15 PM </option>
                            <option value="14:30"> 02:30 PM </option>
                            <option value="14:45"> 02:45 PM </option>
                            <option value="15:00"> 03:00 PM </option>
                            <option value="15:15"> 03:15 PM </option>
                            <option value="15:30"> 03:30 PM </option>
                            <option value="15:45"> 03:45 PM </option>
                            <option value="16:00"> 04:00 PM </option>
                            </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label>Available Appointment Date  <span class="required">*</span></label>                        
                        <input type="date" class="form-control custom-mainforminput" name="appointment_date"  id="appointment_date">
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row">
                    <div class="col-12 col-md-6">
                        <div class="row no-gutters">
                            <label>Patient Name <span class="required">*</span></label>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput"  name="patient_first_name"  id="patient_first_name"/>
                                    <p><small>First name</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput"  name="patient_middle_name"  id="patient_middle_name"/>
                                    <p><small>Middle name</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput"  name="patient_last_name"  id="patient_last_name"/>
                                    <p><small>Last name</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <label>Telephone <span class="required">*</span></label>
                        <input type="tel" class="form-control custom-mainforminput"  name="telephone"  id="telephone"/>
                    </div>
                    <div class="col-12 col-md-3">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" class="form-control custom-mainforminput"  name="email"  id="email"/>
                    </div>
                </div>
                <div class="form-group row margin-top align-items-end">
                    <div class="col-12 col-md-4">
                        <label>Qcard ID number (If Member)</label>
                        <input type="email" class="form-control custom-mainforminput"  name="qcard_number"  id="qcard_number"/>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>The Qcard program is available to be used on the same day of sign up. To get the details and become a Qcard Member <a href="" class="link-style">Click Here</a></p>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row">
                    <div class="col-12">
                        <label>Choose One Payment Option <span class="required">*</span></label>
                        <div class="d-flex radio-item">
                            <div>
                                <img src="https://islands.network/sicknwell-forms-templete/public/theme-resources/images/card.png" />
                            </div>
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option" id="payment_option"/>Qcard - Telemedicine Consultation | Coronavirus Screening Covered -- <b></b>$ 10.00</b><br /><span class="details-radio">Available to Qcard Members (Includes coverage for Coronavirus COVID-19 Screening) | Telemedicine Link emailed once the appointment is processed. Healthcare Provider will determine and schedule testing for COVID-19 Coronavirus.</span></label>
                                <div class="form-group row margin-top align-items-center">
                                    <div class="col-12 col-md-2">
                                        <label>Select Membership</label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <select class="form-control custom-mainforminput" name="membership_type"  id="membership_type">
                                            <option value="Select Membership Type"> Select Membership Type </option>
                                            <option value="Qcard - Established Member"> Qcard - Established Member </option>
                                            <option value="New Qcard Member - Signed up in the last 5 days and have not received membership card."> New Qcard Member - Signed up in the last 5 days and have not received membership card. </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex radio-item">
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option"  id="payment_option"/>Telemedicine Consultation for Coronavirus Screening Only -- <b>$ 49.00</b><br /><span class="details-radio">Available to all patients that believe that they have come into contact with an infected person, or are having symptoms. | Telemedicine Link emailed once the appointment is processed. Healthcare Provider will determine and schedule testing for COVID-19 Coronavirus.</span></label>
                            </div>
                        </div>
                        <div class="d-flex radio-item">
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option"  id="payment_option"/>Telemedicine Consultation for Coronavirus Screening Only | Aetna, Humana, Medicaid, Medicare, Tricare -- <b>Free</b><br /><span class="details-radio">Available to patients with Aetna, Humana, Medicaid, Medicare or Tricare that believe they have come into contact with an infected person, or are having symptoms. You will need to provide a photo of your insurance card back and front, in the next section. | Telemedicine Link emailed once the appointment is processed. Healthcare Provider will determine and schedule testing for COVID-19 Coronavirus.</span></label>
                            </div>
                        </div>
                        <div class="d-flex radio-item">
                            <div class="radio-item-label">
                                <label><input type="radio" name="payment_option"  id="payment_option"/>Telemedicine Consultation -- <b>$ 90.00</b><br /><span class="details-radio">Available to all patients for all visit types (iisues) - Telemedicine Link emailed once the appointment is processed.</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between total-amount">
                    <b>Total:</b>
                    <b>$ 49.00</b>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row">
                    <div class="col-12">
                        <label>Credit Card Details <span class="required">*</span></label>
                        <div class="row no-gutters">
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput"  name="cc_first_name"  id="cc_first_name"/>
                                    <p><small>First name</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput"  name="cc_last_name"  id="cc_last_name"/>
                                    <p><small>Last name</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput" name="cc_number"  id="cc_number" placeholder="**** **** **** ****" data-inputmask='"mask": "9999 9999 9999 999"' data-mask placeholder="MM / YY" />
                                    <p><small>Credit Card Number</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput" name="cc_cvc"  id="cc_cvc" placeholder="CVC" maxlength="4" />
                                    <p><small>Security Code</small></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <div class="padding-wrap">
                                    <input type="text" class="form-control custom-mainforminput" name="cc_expiration"  id="cc_expiration" data-inputmask='"mask": "99 / 99"' data-mask placeholder="MM / YY" />
                                    <p><small>Card Expiration
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <p class="disclaimer">Disclaimer: Be advised that the charge processed above is for the consultation only and other charges may apply, if other services are rendered after the consultation with the medical provider, and deemed necessary for the purpose
                    of treating the condition. For Qcard members, only the $10 copay will apply and all the services covered under the program can be used, if deemed necessary by the medical provider to treat the condition.
                </p>
            </div>
            <div class="form-section last mb-5">
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Process and Continue To Patient Information" class="submitbtn" style="background: #ee1d25;" />
                </div>
            </div>
            <div class="logos-form w-100 position-absolute">
                <div class="d-flex justify-content-between align-items-end">
                    <div><img src="https://islands.network/sicknwell-forms-templete/public/theme-resources/images/logo.png " /></div>
                    <div><img src="https://islands.network/sicknwell-forms-templete/public/theme-resources/images/hipaa-badge.png" /></div>
                </div>
            </div>
        </form>
    </div>
 
    </main>
    </div>
</body>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/popper.min.js"></script>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/bootstrap.min.js"></script>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/smooth-scrollbar.js"></script>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/noty.min.js"></script>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/jquery.inputmask.bundle.min.js"></script>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/iframeResizer.contentWindow.min.js"></script>
<script src="https://islands.network/sicknwell-forms-templete/public/theme-resources/js/main.js"></script>
</body>
</html>