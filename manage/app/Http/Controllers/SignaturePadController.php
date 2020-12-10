<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SignaturePadController extends Controller
{
    public function upload($signature)
    {
			
	    // $folderPath = base_path('public/theme-resources/forms/signatures/');
		// $folderPath = str_replace('manage\\', '', $folderPath);
		// $folderPath = str_replace('manage/', '', $folderPath);
		$file_base_path = '/app/public/forms/signatures/';
		$folderPath = storage_path('/');
		//asset('/manage/storage/app/public/forms/signatures/')
		//dd($folderPath);
	  
	    $image_parts = explode(";base64,", $signature);
		
	    $image_type_aux = explode("image/", $image_parts[0]);
		
	    $image_type = $image_type_aux[1];
		
	    $image_base64 = base64_decode($image_parts[1]);
		  
		$file_inner_path = $file_base_path.uniqid().'.'.$image_type;
		
		$file = $folderPath.$file_inner_path;
		
	    //$file = 'file:///C:/xampp/htdocs/sicknwellforms/public/theme-resources/forms/signatures/'. uniqid() . '.'.$image_type;
		file_put_contents($file, $image_base64); 
		//dd($file);
	    return $file_inner_path;
	    //return back()->with('success', 'success Full upload signature');
	}
	

	
    public function update($signature,$file_path)
    {  
	  
	    $image_parts = explode(";base64,", $signature);
		
	    $image_type_aux = explode("image/", $image_parts[0]);
		
	    $image_type = $image_type_aux[1];
		
	    $image_base64 = base64_decode($image_parts[1]); 
		
	    //$file = 'file:///C:/xampp/htdocs/sicknwellforms/public/theme-resources/forms/signatures/'. uniqid() . '.'.$image_type;
		file_put_contents($file_path, $image_base64); 
		//dd($file);
	    return $file_inner_path;
	    //return back()->with('success', 'success Full upload signature');
    }
}
