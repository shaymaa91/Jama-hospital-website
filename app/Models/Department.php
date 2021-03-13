<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'active'
    ];

    public function doctors(){
        return $this->hasMany(doctor::class);
    }
}
