<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectPP extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
        'semester',
        'hours',
        'current_hours'
    ];

    public function lecturePeriods(){
        return $this->hasMany('App\Models\LecturePeriod');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_subject_p_p_s');
    }
        
}
