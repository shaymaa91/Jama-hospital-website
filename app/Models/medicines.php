<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicines extends Model
{
    use HasFactory;
    protected $fillable = [
        'midicine_name',
        'expiration_date',  
        'status',
        'entry_date',
        'price ',
        'quantity',
        'available_quantity',
        'image',
        'usage_description'
    ];
	
}