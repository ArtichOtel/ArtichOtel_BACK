<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'url_image'
    ];

    public function links()
    {
        return $this->belongsToMany(Link::class);
    }
}
