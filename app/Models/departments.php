<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;
    //protected $table = 'categories';

    protected $fillable=[
        'name',
        
    ];
    function doctors(){
        return $this->hasMany(doctors::class);
    }
}