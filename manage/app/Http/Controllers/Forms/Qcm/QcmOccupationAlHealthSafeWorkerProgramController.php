<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QcmOccupationAlHealthSafeWorkerProgramController extends Controller
{
    //
    
    public function create()
    {
        return view('forms.qcm.qcm-occupation-al-health-worker-safe-program.create');
    }
}
