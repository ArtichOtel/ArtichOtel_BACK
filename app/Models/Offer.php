<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url_image',
        'begin_date',
        'end_date'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array'
    ];
}
