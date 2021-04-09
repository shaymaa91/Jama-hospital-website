<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jama_news extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'auth_name',
        'news_img',
        'auth_img'
    ];
}
