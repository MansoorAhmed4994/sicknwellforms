<?php

namespace App\Models\Forms\Mhst;
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class Mhst_medical_referral_forms extends Model
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
