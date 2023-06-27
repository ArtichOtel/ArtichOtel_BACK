<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'order',
    ];

    protected $casts = [
        'title' => 'array'
    ];

    public function links()
    {
        return $this->belongsToMany(Link::class);
    }
}
