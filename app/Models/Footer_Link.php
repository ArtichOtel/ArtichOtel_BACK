<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_id',
        'link_id',
    ];
}
