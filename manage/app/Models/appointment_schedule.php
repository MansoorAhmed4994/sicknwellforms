<?php

namespace App\Models;

use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class appointment_schedule extends Model
{
    
    public $timestamps = false;
    protected $guarded = [
        'id'
    ];

    use RecordAuthActivity;
    //
    
     
}
