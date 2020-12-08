<?php

namespace App\Models\Forms\Pedim;

use App\Traits\RecordAuthActivity;

use Illuminate\Database\Eloquent\Model;

class Telemedicine extends Model
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
        return $this->belongsTo(Client_forms::class,'client_forms_id','id');
    }
}
