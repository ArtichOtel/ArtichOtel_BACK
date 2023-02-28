<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'url',
        'icon'
    ];

    protected $casts = [
        'text' => 'array'
    ];

    public function footers()
    {
        return $this->belongsToMany(Footer::class);
    }

    public function heroes()
    {
        return $this->belongsToMany(Hero::class);
    }
}
