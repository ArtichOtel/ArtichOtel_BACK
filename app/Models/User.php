<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    function role() {
        return $this->hasOne(Role::class);
    }

    function customer() {
        return $this->belongsTo(Customer::class);
    }
}
