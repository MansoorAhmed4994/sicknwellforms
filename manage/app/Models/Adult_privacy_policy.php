<?php

namespace App\Models;
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class Adult_privacy_policy extends Model
{
    //
    use RecordAuthActivity;


    public function client_forms()
    {
        //dd();
        return $this->belongsTo(Client_forms::class,'client_forms_id','id');
    }
}
