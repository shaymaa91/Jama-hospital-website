<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialize extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'active'
    ];

    public function doctors(){
        return $this->hasMany(doctor::class);
    }
}
