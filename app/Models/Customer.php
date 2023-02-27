<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'lang',
        'avatar_url',
        'user_id'
    ];

    function user()
    {
        return $this->hasOne(User::class);
    }

    function review()
    {
        return $this->belongsToMany(Review::class);
    }

    function adresse()
    {
        return $this->hasMany(Adresse::class, 'customer_id', 'id');
    }

    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value)
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value)
        );
    }
}
