<?php

namespace App\Models; 
use App\Traits\RecordAuthActivity;
use Illuminate\Database\Eloquent\Model;

class Client_forms extends Model
{
    use RecordAuthActivity; 

    protected $guarded = [
        'id'
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class,'clients_id','id');
    }

    //

    public function scopeActive($query, $formId)
    {
        return $query->where('form_id', $formId);
    }

    public function scopeWithoutUpdated($query)
    {
        return $query->where('updated_at', null);
    }
    
    public function AvailableDoctors()
    {
        return $this->hasMany(available_doctor::class, 'client_forms_id', 'id');
    }
    
    public function AppointmentSchedule()
    {
        return $this->hasOne(appointment_schedule::class, 'client_forms_id', 'id');
    }
    
    public function AppointmentLimits()
    {
        return $this->hasOne(appointment_limits::class, 'client_forms_id', 'id');
    }
    
}
