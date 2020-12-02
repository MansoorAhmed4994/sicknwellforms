<?php

namespace App\Models;
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class appointment_limits extends Model
{
    //
    
    use RecordAuthActivity; 
    
    

    protected $guarded = [
        'id'
    ];
    
    public function ClientForms()
    {
        return $this->belongsTo(Client_forms::class,'client_forms_id','id');
    }
    
    protected $nullable = ['start_date','end_date'];

}
