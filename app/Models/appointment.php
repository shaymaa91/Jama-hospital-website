<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class appointment extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;


    protected $fillable = [
      'doctor_id',
      'patient_id',
      'day',
      'starttime',
      'endtime',
      'note',
      'status_id',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   public function customer(){
    return $this->hasOne(Customer::class);


   }
}