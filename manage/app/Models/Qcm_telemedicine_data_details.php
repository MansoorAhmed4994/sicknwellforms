<?php

namespace App\Models;
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class Qcm_telemedicine_data_details extends Model
{

    protected $guarded = [
        'id'
    ];

    use RecordAuthActivity;
    //
    
    public function client_forms()
    {
        return $this->belongsTo(Client_forms::class,'client_forms_id','id');
    }
    
}
