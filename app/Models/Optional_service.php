<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optional_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'u_price',
        'by_person',
        'nb_day'
    ];

    protected $casts = [
        'name' => 'array'
    ];


    function bookings(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Booking::class);
    }
}
