<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'begin_date',
        'end_date',
        'rooms_id',
        'customers_id',
    ];

    function room() {
        return $this->hasOne(Room::class);
    }

    function customer() {
        return $this->belongsTo(Customer::class);
    }
}
