<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialist extends Model
{
    use HasFactory;
    protected $table = 'specialists';

    protected $fillable=[
        'name',
        
    ];
    function doctors(){
        return $this->hasMany(doctors::class);
    }
}