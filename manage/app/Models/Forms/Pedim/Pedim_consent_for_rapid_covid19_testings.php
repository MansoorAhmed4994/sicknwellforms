<?php

namespace App\Models\Forms\Pedim;
use App\Traits\RecordAuthActivity;

use Illuminate\Database\Eloquent\Model;

class Pedim_consent_for_rapid_covid19_testings extends Model
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
