<?php

namespace Softwarescares\Intelistaff\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliacademic\app\Models\Subject;

class Department extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
