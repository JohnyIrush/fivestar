<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;


    protected $fillable = [
            'student_id',
            'title',
            'school_name',
            'school_level_id',
            'meangrade',
            'meanscore',
            'points',
            'start_year',
            'end_year',
            'duration'
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
