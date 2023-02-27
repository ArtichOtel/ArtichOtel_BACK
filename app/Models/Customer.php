<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'lang',
        'avatar_url'
    ];

    function user() {
        return $this->hasOne(User::class);
    }

    function review() {
        return $this->belongsToMany(Review::class);
    }

    function adresse() {
        return $this->hasMany(Adresse::class, 'customer_id', 'id');
    }

}
