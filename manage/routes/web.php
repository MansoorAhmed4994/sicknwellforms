<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
 
 Route::get('/get-appointment', 'QcmTelemedicineFormController@GetAvailableAppointments'); 

//Client Auth
Route::get('/', 'Auth\ClientLoginController@ShowLoginForm')->name('client.login.form'); 
Route::get('/login', 'Auth\ClientLoginController@ShowLoginForm')->name('login');
Route::post('/client/login', 'Auth\ClientLoginController@login')->name('client.login.submit');

//Admin Auth
//Route::get('/admin', function () { return view('auth.login'); });
Route::get('/admin', 'Auth\LoginController@ShowAdminLoginForm')->name('admin.login.form'); 
Route::post('/admin', 'Auth\LoginController@login')->name('auth.login.submit');
Route::get('/test', 'HomeController@testing');


 
//jsforms api url
Route::get('jsform/{form_name}/{form}', function($form_name,$form) {
    return response()->view('forms.jsform', compact('form_name','form'))
    ->header('Content-Type', 'application/javascript;');
})->name('jsforms');



//QcmTelemedicineForm CRUD
Route::get('/QcmTelemedicineForm/{clien_form_id}', 'QcmTelemedicineFormController@create')->name('QcmTelemedicineForm');
Route::post('/QcmTelemedicineForm/create', 'QcmTelemedicineFormController@store')->name('QcmTelemedicineForm.create');

//InOfficeAppointments CRUD
Route::get('/InOfficeAppointments/{clien_form_id}', 'Forms\Pedim\InOfficeAppointmentsController@create')->name('InOfficeAppointments');
Route::post('/InOfficeAppointments/create', 'Forms\Pedim\InOfficeAppointmentsController@store')->name('InOfficeAppointments.create');  
Route::get('/InOfficeAppointments/edit/{submission_id}', 'Forms\Pedim\InOfficeAppointmentsController@edit')->name('InOfficeAppointments.edit');
Route::post('/InOfficeAppointments/update/{submission_id}', 'Forms\Pedim\InOfficeAppointmentsController@update')->name('InOfficeAppointments.update');
Route::get('/InOfficeAppointments/create/meeting/{id}', 'Forms\Pedim\InOfficeAppointmentsController@CreateZoomMeeting')->name('InOfficeAppointments.create.zoom.meeting'); 


//OccupationAlHealthSafeWorkerProgramController CRUD 
Route::get('/OccupationAlHealthSafeWorkerProgram/{clien_form_id}', 'OccupationAlHealthSafeWorkerProgramController@create')->name('OccupationAlHealthSafeWorkerProgram');
Route::post('/OccupationAlHealthSafeWorkerProgram/create', 'OccupationAlHealthSafeWorkerProgramController@store')->name('OccupationAlHealthSafeWorkerProgram.create');

//OccupationAlHealthWorkplacePhysicalsDrugScreenController CRUD
Route::get('/OccupationAlHealthWorkplacePhysicalsDrugScreen/{clien_form_id}', 'OccupationAlHealthWorkplacePhysicalsDrugScreenController@create')->name('OccupationAlHealthWorkplacePhysicalsDrugScreen');
Route::post('/OccupationAlHealthWorkplacePhysicalsDrugScreen/create', 'OccupationAlHealthWorkplacePhysicalsDrugScreenController@store')->name('OccupationAlHealthWorkplacePhysicalsDrugScreen.create');

//QcmContactUsController CRUD 
Route::get('/QcmContactUs/{clien_form_id}', 'QcmContactUsController@create')->name('QcmContactUs');
Route::post('/QcmContactUs/create', 'QcmContactUsController@store')->name('QcmContactUs.create');

//MhstRegisterHomeSleepTestController CRUD 
Route::get('/MhstRegisterHomeSleepTest/{clien_form_id}', 'Forms\Mhst\MhstRegisterHomeSleepTestController@create')->name('MhstRegisterHomeSleepTest');
Route::post('/MhstRegisterHomeSleepTest/create', 'Forms\Mhst\MhstRegisterHomeSleepTestController@store')->name('MhstRegisterHomeSleepTest.create');

//MhstAdultPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/MhstAdultPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@create')->name('MhstAdultPrivacyPolicyAndConsentForTreatment');
Route::post('/MhstAdultPrivacyPolicyAndConsentForTreatment/create', 'Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@store')->name('MhstAdultPrivacyPolicyAndConsentForTreatment.create'); 
Route::get('/MhstAdultPrivacyPolicyAndConsentForTreatment/edit/{submission_id}', 'Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@edit')->name('MhstAdultPrivacyPolicyAndConsentForTreatment.edit');
Route::post('/MhstAdultPrivacyPolicyAndConsentForTreatment/update/{Mhst_adult_data_id}', 'Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@update')->name('MhstAdultPrivacyPolicyAndConsentForTreatment.update');
Route::get('/MhstAdultPrivacyPolicyAndConsentForTreatment/create/meeting/{id}', 'Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@CreateZoomMeeting')->name('MhstAdultPrivacyPolicyAndConsentForTreatment.create.zoom.meeting'); 



//MhstMinorPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/MhstMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@create')->name('MhstMinorPrivacyPolicyAndConsentForTreatment');
Route::post('/MhstMinorPrivacyPolicyAndConsentForTreatment/create', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@store')->name('MhstMinorPrivacyPolicyAndConsentForTreatment.create');
Route::get('/MhstMinorPrivacyPolicyAndConsentForTreatment/edit/{submission_id}', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@edit')->name('MhstMinorPrivacyPolicyAndConsentForTreatment.edit');
Route::post('/MhstMinorPrivacyPolicyAndConsentForTreatment/update/{Mhst_minor_data_id}', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@update')->name('MhstMinorPrivacyPolicyAndConsentForTreatment.update');
Route::get('/MhstMinorPrivacyPolicyAndConsentForTreatment/create/meeting/{id}', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@CreateZoomMeeting')->name('MhstMinorPrivacyPolicyAndConsentForTreatment.create.zoom.meeting'); 


//MhstMedicalReferralFormController CRUD 
Route::get('/MhstMedicalReferralForm/{clien_form_id}', 'Forms\Mhst\MhstMedicalReferralFormController@create')->name('MhstMedicalReferralForm');
Route::post('/MhstMedicalReferralForm/create', 'Forms\Mhst\MhstMedicalReferralFormController@store')->name('MhstMedicalReferralForm.create');

//QcardSelfPaySubscriptionController CRUD 
Route::get('/QcardSelfPaySubscription/{clien_form_id}', 'QcardSelfPaySubscriptionController@create')->name('QcardSelfPaySubscriptionr');
Route::post('/QcardSelfPaySubscription/create', 'QcardSelfPaySubscriptionController@store')->name('QcardSelfPaySubscriptionr.create');

//PlanDeSaludBaratoController CRUD 
Route::get('/PlanDeSaludBarato/{clien_form_id}', 'PlanDeSaludBaratoController@create')->name('PlanDeSaludBarato');
Route::post('/PlanDeSaludBarato/create', 'PlanDeSaludBaratoController@store')->name('PlanDeSaludBarato.create');

//PedimAdultPatientInformationController CRUD 
Route::get('/PedimAdultPatientInformation/{clien_form_id}', 'Forms\Pedim\PedimAdultPatientInformationController@create')->name('PedimAdultPatientInformation');
Route::post('/PedimAdultPatientInformation/create', 'Forms\Pedim\PedimAdultPatientInformationController@store')->name('PedimAdultPatientInformation.create');

//PedimPediatricPatientInformationController CRUD 
Route::get('/PedimPediatricPatientInformation/{clien_form_id}', 'Forms\Pedim\PedimPediatricPatientInformationController@create')->name('PedimPediatricPatientInformation');
Route::post('/PedimPediatricPatientInformation/create', 'Forms\Pedim\PedimPediatricPatientInformationController@store')->name('PedimPediatricPatientInformation.create');


//PedimTelemedicineController CRUD 
Route::get('/PedimTelemedicine/{clien_form_id}', 'Forms\Pedim\PedimTelemedicineController@create')->name('PedimTelemedicine');
Route::post('/PedimTelemedicine/create', 'Forms\Pedim\PedimTelemedicineController@store')->name('PedimTelemedicine.create');
Route::get('/PedimTelemedicine/edit/{submission_id}', 'Forms\Pedim\PedimTelemedicineController@edit')->name('PedimTelemedicine.edit');
Route::post('/PedimTelemedicine/update/{pedim_telemedicines}', 'Forms\Pedim\PedimTelemedicineController@update')->name('PedimTelemedicine.update');
Route::get('/PedimTelemedicine/create/meeting/{id}', 'Forms\Pedim\PedimTelemedicineController@CreateZoomMeeting')->name('PedimTelemedicine.create.zoom.meeting'); 

//PedimFeedBackFormController CRUD
Route::get('/PedimFeedBackForm/{clien_form_id}', 'Forms\Pedim\PedimFeedBackFormController@create')->name('PedimFeedBackForm');
Route::post('/PedimFeedBackForm/create', 'Forms\Pedim\PedimFeedBackFormController@store')->name('PedimFeedBackForm.create');
Route::get('/PedimFeedBackForm/edit/{submission_id}', 'Forms\Pedim\PedimFeedBackFormController@edit')->name('PedimFeedBackForm.edit');
Route::post('/PedimFeedBackForm/update/{pedim_feed_backs}', 'Forms\Pedim\PedimFeedBackFormController@update')->name('PedimFeedBackForm.update');
Route::get('/PedimFeedBackForm/create/meeting/{id}', 'Forms\Pedim\PedimFeedBackFormController@CreateZoomMeeting')->name('PedimFeedBackForm.create.zoom.meeting'); 
 
//ConsentForRapidCovid19Testing CRUD
Route::get('/PedimConsentForRapidCovid19Testing/{clien_form_id}', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@create')->name('PedimConsentForRapidCovid19Testing');
Route::post('/PedimConsentForRapidCovid19Testing/create', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@store')->name('PedimConsentForRapidCovid19Testing.create');
Route::get('/PedimConsentForRapidCovid19Testing/edit/{submission_id}', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@edit')->name('PedimConsentForRapidCovid19Testing.edit');
Route::post('/PedimConsentForRapidCovid19Testing/update/{consent_for_covid19}', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@update')->name('PedimConsentForRapidCovid19Testing.update');
Route::get('/PedimConsentForRapidCovid19Testing/create/meeting/{id}', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@CreateZoomMeeting')->name('PedimConsentForRapidCovid19Testing.create.zoom.meeting'); 


//AdultPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/PedimAdultPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@create')->name('PedimAdultPrivacyPolicyAndConsentForTreatment'); 

Route::post('/PedimAdultPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@store')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.create');
//Route::post('/PedimAdultPrivacyPolicyAndConsentForTreatment/submissions/', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@GetVerifiedSubmission')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.get.submissions');
Route::get('/PedimAdultPrivacyPolicyAndConsentForTreatment/edit/{submission_id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@edit')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.edit');
Route::post('/PedimAdultPrivacyPolicyAndConsentForTreatment/update/{Pedim_adult_data_id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@update')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.update');
Route::get('/PedimAdultPrivacyPolicyAndConsentForTreatment/create/meeting/{id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@CreateZoomMeeting')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.create.zoom.meeting'); 



//MinorPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/PedimMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@create')->name('PedimMinorPrivacyPolicyAndConsentForTreatment');

Route::post('/PedimMinorPrivacyPolicyAndConsentForTreatment/create', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@store')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.create');
Route::get('/PedimMinorPrivacyPolicyAndConsentForTreatment/edit/{submission_id}', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@edit')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.edit');
Route::post('/PedimMinorPrivacyPolicyAndConsentForTreatment/update/{Pedim_minor_data_id}', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@update')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.update');
Route::get('/PedimMinorPrivacyPolicyAndConsentForTreatment/create/meeting/{id}', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@CreateZoomMeeting')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.create.zoom.meeting'); 
// SignaturePadController
Route::post('signaturepad','SignaturePadController@upload')->name('signaturepad.upload');

 
   
    
    
    //multi auth route
 


        Route::get('/QcmTelemedicineForm/edit/{clien_form_id}', 'QcmTelemedicineFormController@edit')->name('edit-QcmTelemedicineForm');
        Route::post('/QcmTelemedicineForm/edit/{Qcm_telemedicine_data_details}', 'QcmTelemedicineFormController@update')->name('QcmTelemedicineForm.update');
        Route::get('/QcmTelemedicineForm/create/meeting/{id}', 'QcmTelemedicineFormController@CreateZoomMeeting')->name('QcmTelemedicineForm.create.zoom.meeting');
        
        //Get client varefied
        Route::any('/clients/details/verified', 'ClientsController@GetVerifiedClient')->name('varefied-clients.details');


        
Route::group(['middleware' => ['auth:clients']],function(){ 


    Route::get('/client/logout', 'Auth\ClientLoginController@logout')->name('client.logout');
    Route::get('/client/dashboard/','client\ClientController@ClientFormsList')->name('client.dashboard');
    Route::get('/client/forms/','client\ClientController@ClientFormsList')->name('client.forms'); 



    //QcmTelemedicineForm Auth CRUD
    Route::get('/client/QcmTelemedicineForm/submissions/{clien_form_id}','QcmTelemedicineFormController@submissions')->name('client.QcmTelemedicineForm.submissions'); 
    
    //InOfficeAppointmentsController Auth CRUD
    Route::get('/client/InOfficeAppointments/{clien_form_id}','Forms\Pedim\InOfficeAppointmentsController@submissions')->name('client.InOfficeAppointments.submissions');

     
    //PedimFeedBackFormController Auth CRUD
    Route::get('/client/PedimFeedBackForm/{clien_form_id}','Forms\Pedim\PedimFeedBackFormController@submissions')->name('client.PedimFeedBackForm.submissions');
    
    //PedimConsentForRapidCovid19TestingController Auth CRUD
    Route::get('/client/PedimConsentForRapidCovid19Testing/{clien_form_id}','Forms\Pedim\PedimConsentForRapidCovid19TestingController@submissions')->name('client.PedimConsentForRapidCovid19Testing.submissions');

    //MhstMinorPrivacyPolicyAndConsentForTreatmentController Auth CRUD
    Route::get('/client/MhstMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}','Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@submissions')->name('client.MhstMinorPrivacyPolicyAndConsentForTreatment.submissions');
    
    

    //PedimTelemedicineController Auth CRUD
    Route::get('/client/PedimTelemedicine/{clien_form_id}','Forms\Pedim\PedimTelemedicineController@submissions')->name('client.PedimTelemedicine.submissions');


    //PedimAdultPrivacyPolicyAndConsentForTreatmentController Auth CRUD
    Route::get('/client/PedimAdultPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}','Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@submissions')->name('client.PedimAdultPrivacyPolicyAndConsentForTreatment.submissions');

    //PedimMinorPrivacyPolicyAndConsentForTreatmentController Auth CRUD

    Route::get('/client/PedimMinorPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}','Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@submissions')->name('client.PedimMinorPrivacyPolicyAndConsentForTreatment.submissions');

    //MhstAdultPrivacyPolicyAndConsentForTreatmentController Auth CRUD
    Route::get('/client/MhstAdultPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}','Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@submissions')->name('client.MhstAdultPrivacyPolicyAndConsentForTreatment.submissions');


    
    //Embed Link
    Route::get('/client/form/embed/link/{form_name}/{clien_form_id}', 'Client_formController@FormEmbedLink')->name('client.form.embed.link');
    
    
}); 

 

Route::group(['middleware' => ['auth:web']],function(){ 
    
    //Route::get('/admin/dashboard', function () { return view('form-templetes'); })->name('admin.dashboard') ;
    Route::get('/admin/dashboard', 'FormsController@index')->name('admin.dashboard') ;

    Route::get('/form-class', function (){return view('form-class');})->name('form-class');
    
    Route::get('/form-templetes', 'FormsController@index')->name('form-templetes') ; 

    Route::get('/form-demo', function () { return view('forms.form-templetes'); })->name('form-demo') ; 
    
    //================================================================================
    //====================================Client Form=================================
    //================================================================================
    
    //=============================QCm Telemedicine  Form=============================
    Route::get('/client-form/{form_id}', 'Client_formController@create')->name('client-form');
    Route::post('/client-form/create', 'Client_formController@store')->name('create-client-form');
    //Route::get('/client-forms-list/{client}', 'Client_formController@clientFormsList')->name('clientFormsList');
    Route::get('/client/forms/list/{client}', 'Client_formController@clientFormsList')->name('client.forms.list');
    
    
    //=============================In-Office Appointments Form=============================
    
    
    

    //EmbedLink CRUD
    Route::get('/embeded-form/{clien_form_id}', 'Client_formController@embed_link')->name('embed-form');
    Route::get('/form/embed/link/{form_name}/{clien_form_id}', 'Client_formController@FormEmbedLink')->name('form.embed.link');

    //Clients
    Route::get('/clients/list', 'ClientsController@index')->name('clients.list');
    Route::get('/clients/details/{client_id}', 'ClientsController@client_info')->name('clients.details');

    
    
    /*==========================================================================================*/
    /*==========================================================================================*/
    /*==========================================================================================*/
    /*=============================================Forms========================================*/
    /*==========================================================================================*/
    /*==========================================================================================*/
    /*==========================================================================================*/
    

    
    //QcmTelemedicineForm Auth CRUD
    Route::get('/QcmTelemedicineForm/submissions/{clien_form_id}', 'QcmTelemedicineFormController@submissions')->name('QcmTelemedicineForm.submissions');  
    
    //QcmTelemedicineForm Auth CRUD
    Route::get('/InOfficeAppointments/submissions/{clien_form_id}', 'Forms\Pedim\InOfficeAppointmentsController@submissions')->name('InOfficeAppointments.submissions'); 
    

    
    //PedimFeedBackFormController Auth CRUD
    Route::get('/PedimFeedBackForm/submissions/{clien_form_id}','Forms\Pedim\PedimFeedBackFormController@submissions')->name('PedimFeedBackForm.submissions');

    //PedimTelemedicineControllerController Auth CRUD
    Route::get('/PedimTelemedicine/submissions/{clien_form_id}','Forms\Pedim\PedimTelemedicineController@submissions')->name('PedimTelemedicine.submissions');

    //PedimAdultPrivacyPolicyAndConsentForTreatment Auth CRUD
    Route::get('/PedimAdultPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}','Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@submissions')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.submissions');

    //PedimConsentForRapidCovid19TestingController Auth CRUD
    Route::get('/PedimConsentForRapidCovid19Testing/submissions/{clien_form_id}','Forms\Pedim\PedimConsentForRapidCovid19TestingController@submissions')->name('PedimConsentForRapidCovid19Testing.submissions');

    //PedimMinorPrivacyPolicyAndConsentForTreatmentController Auth CRUD
    Route::get('/PedimMinorPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}','Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@submissions')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.submissions');


    
    //MhstMinorPrivacyPolicyAndConsentForTreatmentController Auth CRUD
    Route::get('/MhstMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}','Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@submissions')->name('MhstMinorPrivacyPolicyAndConsentForTreatment.submissions');

 
    //MhstAdultPrivacyPolicyAndConsentForTreatmentController Auth CRUD
    Route::get('/MhstAdultPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}','Forms\Mhst\MhstAdultPrivacyPolicyAndConsentForTreatmentController@submissions')->name('MhstAdultPrivacyPolicyAndConsentForTreatment.submissions');
 

    
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    
    
  
    
    

});


 

?>