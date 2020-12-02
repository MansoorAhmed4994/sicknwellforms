<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturePadController extends Controller
{
    public function upload(Request $request)
    {
	    $folderPath = base_path('public/theme-resources/forms/signatures/');
	    $folderPath = str_replace('manage/', '', $folderPath);
	    //dd($folderPath);
	  
	    $image_parts = explode(";base64,", $request->signed);
	        
	    $image_type_aux = explode("image/", $image_parts[0]);
	      
	    $image_type = $image_type_aux[1];
	      
	    $image_base64 = base64_decode($image_parts[1]);
	      
	    $file = $folderPath. uniqid() . '.'.$image_type;
	   // $file = 'home/desenado/'.$folderPath .'/'. uniqid() . '.'.$image_type;
	    file_put_contents($file, $image_base64);
	    
	    return $file;
	    //return back()->with('success', 'success Full upload signature');
    }
}
