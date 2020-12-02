<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccupationAlHealthSafeWorkerProgramController extends Controller
{
    //
    
    public function create()
    {
        return view('forms.occupation-al-health-worker-safe-program.create');
    }
}
