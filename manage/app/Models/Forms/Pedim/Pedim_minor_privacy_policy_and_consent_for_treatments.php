<?php

namespace App\Models\Forms\Pedim;
use App\Traits\RecordAuthActivity;

use Illuminate\Database\Eloquent\Model;

class Pedim_minor_privacy_policy_and_consent_for_treatments extends Model
{
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
