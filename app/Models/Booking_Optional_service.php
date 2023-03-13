<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_Optional_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookings_id',
        'optional_services_id',
        //'multiplicator',
    ];

    function booking() {
        return $this->belongsTo(Booking::class);
    }

    function optionalService() {
        return $this->hasOne(Optional_service::class);
    }
}
