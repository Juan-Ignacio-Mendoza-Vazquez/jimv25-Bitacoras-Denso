<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = [
        'id',
        'name',
        'company',
        'reason',
        'hour',
        'photo',
    ];
}
