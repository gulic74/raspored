<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_term');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_term');
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_term');
    }
}
