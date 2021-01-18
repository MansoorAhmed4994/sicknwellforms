<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;     
use App\Models\available_doctor; 
use App\Models\appointment_schedule;
use App\Models\appointment_limits; 
use App\Models\Clients;
use App\Models\Client_forms;
use Illuminate\Support\Facades\Storage; 


use Illuminate\Support\Facades\File;
use Auth;

class UploadImageController extends Controller
{
    //
    public function storage_upload($file,$file_base_path)
    {
              
        

        $folderPath = storage_path('/');  
        

        $path = storage_path('/').''.$file_base_path;
        
        if(!File::isDirectory($path)){

            File::makeDirectory($path, 0777, true, true);
    
        }        
   
        //$file->move($destinationPath,$file->getClientOriginalName());
        $number = mt_rand(1000000000, 9999999999);
        $fileName = $number.''.time().'.'.$file->getClientOriginalExtension();  
        //dd(public_path('uploads'));
        $destination_path = $folderPath.''.$file_base_path;

       $file->move($destination_path, $fileName);
        
       $File_final_path = $file_base_path.''.$fileName;

    //    dd($File_final_path);
        
       return $File_final_path;  

    }


    public function update_image_upload($file,$file_base_path)
    {
              
        

        $folderPath = storage_path('/');  
        
        //dd($file->getClientOriginalExtension());
        $path = storage_path('/').''.$file_base_path;
        
        if(!File::isDirectory($path)){

            File::makeDirectory($path, 0777, true, true);
    
        }      
        //$file->move($destination_path, $fileName);
        //dd($file->getClientOriginalExtension());
        //$file->move($destinationPath,$file->getClientOriginalName());
        $number = mt_rand(1000000000, 9999999999);
        $fileName = $number.''.time().'.'.$file->getClientOriginalExtension();  
        //dd(public_path('uploads'));
        $destination_path = $folderPath.''.$file_base_path;

       $file->move($destination_path, $fileName);
        
       $File_final_path = $file_base_path.''.$fileName;

    //    dd($File_final_path);
        
       return $File_final_path;  

    }



}
