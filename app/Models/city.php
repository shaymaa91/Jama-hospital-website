<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $table = 'city';

    protected $fillable=[
        'name',
        
    ];
    function doctors(){
        return $this->hasMany(doctors::class);
    }
}