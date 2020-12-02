<?php

namespace App\Models;
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class In_office_appointments extends Model
{

    protected $guarded = [
        'id'
    ];

    use RecordAuthActivity;
    //
    public function client_forms()
    {
        //dd();
        return $this->belongsTo(Client_forms::class,'client_forms_id','id');
    }
}
