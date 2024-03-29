<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url_image',
        'order'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array'
    ];
}
