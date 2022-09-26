<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable = [
        'name',
        'start_day',
        'course',
        'semester',
    ];
    use HasFactory;
}
