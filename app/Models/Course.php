<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function terms()
    {
        return $this->belongsToMany(Term::class, 'course_term');
    }
}
