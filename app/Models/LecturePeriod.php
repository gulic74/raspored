<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturePeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjectPP_id',
        'classroom_id',
        'day',
        'hours',
        'week',
        'comment'
    ];

    public function classroom(){
        return $this->belongsTo('App\Models\Classroom');
    }

    public function subjectPP(){
        return $this->belongsTo('App\Models\SubjectPP');
    }
}
