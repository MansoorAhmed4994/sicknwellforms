<?php

namespace App\Models\Forms\Qcm;
use App\Traits\RecordAuthActivity;

use Illuminate\Database\Eloquent\Model;

class Qcm_contact_forms extends Model
{
    //
    protected $guarded = [
        'id'
    ];

    use RecordAuthActivity;
    //
    public function client_forms()
    {
        //dd();
        return $this->belongsTo('App\Models\Client_forms','client_forms_id','id');
    }
}
