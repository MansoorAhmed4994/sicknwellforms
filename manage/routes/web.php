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
Route::post('/InOfficeAppointments/submissions/', 'Forms\Pedim\InOfficeAppointmentsController@GetVerifiedSubmission')->name('InOfficeAppointments.get.submissions');
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
 


//MhstMinorPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/MhstMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@create')->name('MhstMinorPrivacyPolicyAndConsentForTreatment');
Route::post('/MhstMinorPrivacyPolicyAndConsentForTreatment/create', 'Forms\Mhst\MhstMinorPrivacyPolicyAndConsentForTreatmentController@store')->name('MhstMinorPrivacyPolicyAndConsentForTreatment.create');

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
  
//PedimFeedBackFormController CRUD
Route::get('/PedimFeedBackForm/{clien_form_id}', 'Forms\Pedim\PedimFeedBackFormController@create')->name('PedimFeedBackForm');
Route::post('/PedimFeedBackForm/create', 'Forms\Pedim\PedimFeedBackFormController@store')->name('PedimFeedBackForm.create');
Route::post('/PedimFeedBackForm/submissions/', 'Forms\Pedim\PedimFeedBackFormController@GetVerifiedSubmission')->name('PedimFeedBackForm.get.submissions');
Route::get('/PedimFeedBackForm/edit/{submission_id}', 'Forms\Pedim\PedimFeedBackFormController@edit')->name('PedimFeedBackForm.edit');
Route::post('/PedimFeedBackForm/update/{submission_id}', 'Forms\Pedim\PedimFeedBackFormController@update')->name('PedimFeedBackForm.update');
Route::get('/PedimFeedBackForm/create/meeting/{id}', 'Forms\Pedim\PedimFeedBackForm@CreateZoomMeeting')->name('PedimFeedBackForm.create.zoom.meeting'); 
 
//ConsentForRapidCovid19Testing CRUD
Route::get('/PedimConsentForRapidCovid19Testing/{clien_form_id}', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@create')->name('PedimConsentForRapidCovid19Testing');
Route::post('/PedimConsentForRapidCovid19Testing/create', 'Forms\Pedim\PedimConsentForRapidCovid19TestingController@store')->name('PedimConsentForRapidCovid19Testing.create');

 
//ConsentForTreatmentOfAMinorController CRUD
Route::get('/PedimMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@create')->name('PedimMinorPrivacyPolicyAndConsentForTreatment');
Route::post('/PedimMinorPrivacyPolicyAndConsentForTreatment/create', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@store')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.create');


//AdultPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/PedimAdultPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@create')->name('PedimAdultPrivacyPolicyAndConsentForTreatment'); 

Route::get('/PedimAdultPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimAdultPrivacyPolicyAndConsentForTreatmentController@store')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.create'); 
Route::namespace('Forms\\Pedim')->prefix('')->name('PedimAdultPrivacyPolicyAndConsentForTreatment.')->group(function(){ 
   // Route::resource('/PedimAdultPrivacyPolicyAndConsentForTreatment', 'PedimAdultPrivacyPolicyAndConsentForTreatmentController', ['except' => ['show','create'] ]);  
});

//MinorPrivacyPolicyAndConsentForTreatmentController CRUD
Route::get('/PedimMinorPrivacyPolicyAndConsentForTreatment/{clien_form_id}', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@create')->name('PedimMinorPrivacyPolicyAndConsentForTreatment');
Route::post('/PedimMinorPrivacyPolicyAndConsentForTreatment/create', 'Forms\Pedim\PedimMinorPrivacyPolicyAndConsentForTreatmentController@store')->name('PedimMinorPrivacyPolicyAndConsentForTreatment.create');

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
    Route::get('/client/QcmTelemedicineForm/{clien_form_id}','QcmTelemedicineFormController@submissions')->name('client.QcmTelemedicineForm.submissions'); 
    
    //InOfficeAppointmentsController Auth CRUD
    Route::get('/client/InOfficeAppointments/{clien_form_id}','Forms\Pedim\InOfficeAppointmentsController@submissions')->name('client.InOfficeAppointments.submissions');
    
    //InOfficeAppointmentsController Auth CRUD
    Route::get('/client/PedimFeedBackForm/{clien_form_id}','Forms\Pedim\PedimFeedBackFormController@submissions')->name('client.PedimFeedBackForm.submissions');
    
    

    //Embed Link
    Route::get('/client/form/embed/link/{form_name}/{clien_form_id}', 'Client_formController@FormEmbedLink')->name('client.form.embed.link');
    
    
}); 

 

Route::group(['middleware' => ['auth:web']],function(){ 

    
    
    
    //Route::get('/admin/dashboard', function () { return view('form-templetes'); })->name('admin.dashboard') ;
    Route::get('/admin/dashboard', 'FormsController@index')->name('admin.dashboard') ;

    Route::get('/form-class', function () { return view('form-class'); })->name('form-class') ; 
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
    Route::get('/Admin/QcmTelemedicineForm/submissions/{clien_form_id}', 'QcmTelemedicineFormController@submissions')->name('QcmTelemedicineForm.submissions'); 
    Route::post('/Admin/QcmTelemedicineForm/submissions/', 'QcmTelemedicineFormController@GetVerifiedSubmission')->name('QcmTelemedicineForm.get.submissions');
    
    //QcmTelemedicineForm Auth CRUD
    Route::get('/Admin/InOfficeAppointments/submissions/{clien_form_id}', 'Forms\Pedim\InOfficeAppointmentsController@submissions')->name('InOfficeAppointments.submissions'); 
    Route::post('/Admin/InOfficeAppointments/submissions/', 'Forms\Pedim\InOfficeAppointmentsController@GetVerifiedSubmission')->name('InOfficeAppointments.get.submissions');
    
    
    //QcmTelemedicineForm Auth CRUD
    Route::get('/Admin/AdultPrivacyPolicyAndConsentForTreatment/submissions/{clien_form_id}', 'QcmTelemedicineFormController@submissions')->name('AdultPrivacyPolicyAndConsentForTreatment.submissions'); 
    Route::post('/Admin/AdultPrivacyPolicyAndConsentForTreatment/submissions/', 'QcmTelemedicineFormController@GetVerifiedSubmission')->name('AdultPrivacyPolicyAndConsentForTreatment.get.submissions'); 
    
    //PedimFeedBackFormController Auth CRUD
    Route::get('/Admin/PedimFeedBackForm/{clien_form_id}','Forms\Pedim\PedimFeedBackFormController@submissions')->name('PedimFeedBackForm.submissions');
    
    
    
    
    
    
    
    
    
    
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    
    
  
    
    

});


 

?>