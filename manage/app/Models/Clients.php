<?php

namespace App\Models; 
use Illuminate\Notifications\Notifiable;
use App\Traits\RecordAuthActivity;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Clients extends Authenticatable
{ 
    use RecordAuthActivity; 
    use Notifiable;

    protected $guard = 'clients';
 
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function ClientForm()
    {
        return $this->hasMany(Client_forms::class, 'clients_id', 'id');
    }

    // public function form()
    // {
    //     return $this->hasMany(Client_forms::class);
    // }

    public function form()
    {
        return $this->belongsToMany(Form::class, 'client_forms', 'clients_id', 'form_id')
        ->withTimestamps()
        ->withPivot(['id','created_by', 'updated_by', 'status']);
    }
    
}
