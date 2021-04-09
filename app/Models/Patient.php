<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    //id	fullname	type	date_of_birth	gender	blood_group	city	address	mobile	image	status
    protected $fillable = [
        'fullname',
        'date_of_birth',
        'gender',
        'blood_group',
        'city_id',
        'address',
        'mobile',
        'image',
        'user_id'
    ];


    public function city(){
        return $this->belongsTo(city::class,'city_id', 'id');
    }
    public function user(){
        return $this->belongsTo(user::class,'user_id', 'id');
    }
}
