<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    function user() {
        return $this->hasOne(User::class);
    }

    function review() {
        return $this->belongsToMany(Review::class);
    }

}
