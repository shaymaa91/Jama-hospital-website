<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class Doctor extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;


    protected $fillable = [
        'fullname',
        'degree',
        'date_of_birth',
        'specialist',
        'department',
        'city',
        'address',
        'mobile',
        'salary',
        'image',
        'short_bio',
        'status',
        'username',
        'gender',
        'email',
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
