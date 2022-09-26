<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public function terms()
    {
        return $this->belongsToMany(Term::class, 'classroom_term');
    }

    public function lecturePeriods(){
        return $this->hasMany('App\Models\LecturePeriod');
    }
}
