<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturePadController extends Controller
{
    public function upload($signature)
    {
	    // $folderPath = base_path('public/theme-resources/forms/signatures/');
		// $folderPath = str_replace('manage\\', '', $folderPath);
		// $folderPath = str_replace('manage/', '', $folderPath);
		$folderPath = storage_path('app/public/forms/signatures/');
		
		//echo $folderPath;
	  
	    $image_parts = explode(";base64,", $signature);
		
	    $image_type_aux = explode("image/", $image_parts[0]);
		
	    $image_type = $image_type_aux[1];
		
	    $image_base64 = base64_decode($image_parts[1]);
	      
	    $file = $folderPath. uniqid().'.'.$image_type;
	    //$file = 'file:///C:/xampp/htdocs/sicknwellforms/public/theme-resources/forms/signatures/'. uniqid() . '.'.$image_type;
	    file_put_contents($file, $image_base64); 
	    return $file;
	    //return back()->with('success', 'success Full upload signature');
    }
}
