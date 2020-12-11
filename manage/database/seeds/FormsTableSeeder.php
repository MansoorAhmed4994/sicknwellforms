<?php 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Form;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::truncate();
        Form::create([
            'form_name' => 'QcmTelemedicineForm',
            'title' => 'QcmTelemedicine',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'QcmTelemedicineForm',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

            
        ]);

        Form::create([
            'form_name' => 'InOfficeAppoints',
            'title' => 'In Office Appoints',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'InOfficeAppoints',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',            
        ]);

        Form::create([

            'form_name' => 'AdultPrivacyPolicyAndConsentForTreatment',
            'title' => 'Adult Privacy Policy And Consent For Treatment Con...',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'AdultPrivacyPolicyAndConsentForTreatment',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'PedimFeedBackForm',
            'title' => 'Pedim Feed Back Form',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'PedimFeedBackForm',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
  
        ]);

        Form::create([

            'form_name' => 'MinorPrivacyPolicyAndConsentForTreatment',
            'title' => 'Minor Privacy Policy And Consent For Treatment',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'MinorPrivacyPolicyAndConsentForTreatment',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'ConsentForTreatmentOfAMinor',
            'title' => 'Consent For Treatment Of A Minor',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'ConsentForTreatmentOfAMinor',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([
                    
            'form_name' => 'ConsentForRapidCovid19Testing',
            'title' => 'Consent For Rapid Covid 19 Testing',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'ConsentForRapidCovid19Testing',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

        ]);

        Form::create([
                        
            'form_name' => 'PedimTelemedicine',
            'title' => 'Pedim Telemedicine',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'PedimTelemedicine',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

        ]);

        Form::create([
                        
            'form_name' => 'OccupationAlHealthSafeWorkerProgram',
            'title' => 'OccupationAl Health Safe Worker Program',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'OccupationAlHealthSafeWorkerProgram',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

        ]);

        Form::create([
                        
            'form_name' => 'OccupationAlHealthWorkplacePhysicalsDrugScreen',
            'title' => 'Occupation Al Health Workplace Physicals Drug Scre...',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'OccupationAlHealthWorkplacePhysicalsDrugScreen',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

        ]);

        Form::create([

            'form_name' => 'QcmContactUs',
            'title' => 'Qcm Contact Us',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'QcmContactUs',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

                        
        ]);

        Form::create([

            'form_name' => 'MhstAdultPrivacyPolicyAndConsentForTreatment',
            'title' => 'Mhst Adult Privacy Policy And Consent For Treatmen...',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'MhstAdultPrivacyPolicyAndConsentForTreatment',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'MhstMinorPrivacyPolicyAndConsentForTreatment',
            'title' => 'Mhst Minor Privacy Policy And Consent For Treatmen...',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'MhstMinorPrivacyPolicyAndConsentForTreatment',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'MhstMedicalReferralForm',
            'title' => 'Mhst Medical Referral Form',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'MhstMedicalReferralForm',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'QcardSelfPaySubscription',
            'title' => 'Qcard Self Pay Subscription',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'QcardSelfPaySubscription',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'PlanDeSaludBarato',
            'title' => 'PlanDe Salud Barato',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'PlanDeSaludBarato',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
                        
        ]);

        Form::create([

            'form_name' => 'MhstRegisterHomeSleepTest',
            'title' => 'Mhst Register Home Sleep Test',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'MhstRegisterHomeSleepTest',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

        ]);

        Form::create([

            'form_name' => 'PedimPediatricPatientInformation',
            'title' => 'Pedim Pediatric Patient Information',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'PedimPediatricPatientInformation',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',
        ]);

        Form::create([

            'form_name' => 'PedimAdultPatientInformation',
            'title' => 'Pedim Adult Patient Information',
            'sub_title' => '',
            'fields_count' => '0',
            'form_link' => 'PedimAdultPatientInformation',
            'image_path' => '',
            'created_by' => '0',
            'updated_by' => '0',
            'status' => 'Active',

        ]);
    }
}


