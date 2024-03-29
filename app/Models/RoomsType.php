<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url_image',
        'price'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array'
    ];
}
