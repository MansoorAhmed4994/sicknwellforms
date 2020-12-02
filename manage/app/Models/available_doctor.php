<?php

namespace App\Models;
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class available_doctor extends Model
{
    //
    use RecordAuthActivity; 

    protected $guarded = [
        'id'
    ];
    
    public function QcmTelemedicine()
    {
        return $this->belongsTo(Client_forms::class,'client_forms_id','id');
    }
}
