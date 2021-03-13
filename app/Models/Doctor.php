<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    // fullname,degree,date_of_birth,specialist,department,city,address,mobile,salary,image,short_bio,status
    protected $fillable = [
        'fullname',
        'degree',
        'date_of_birth',
        'specialize_id',
        'department_id',
        'city_id',
        'address',
        'mobile',
        'salary',
        'image',
        'short_bio',
        'status',
        'user_id'
    ];

    public function specialize(){
        return $this->belongsTo(specialize::class,'specialize_id', 'id');
    }

    public function department(){
        return $this->belongsTo(department::class,'department_id', 'id');
    }
    public function city(){
        return $this->belongsTo(city::class,'city_id', 'id');
    }
    public function user(){
        return $this->belongsTo(user::class,'user_id', 'id');
    }
}
