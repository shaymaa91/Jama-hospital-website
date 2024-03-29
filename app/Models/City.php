<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'active'
    ];

    public function doctors(){
        return $this->hasMany(doctor::class);
    }
    public function patients(){
        return $this->hasMany(patient::class);
    }
}
