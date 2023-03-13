<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory; use Notifiable;

    protected $fillable = [
        'begin_date',
        'end_date',
        'rooms_id',
        'customers_id',
        'status',
        'nbrs_people',
    ];

    function room(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Room::class);
    }

    function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    function optionalServices(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Optional_service::class);
    }
}
