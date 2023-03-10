<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionalService extends Model
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


    function bookings() {
        return $this->belongsToMany(Booking::class);
    }
}
