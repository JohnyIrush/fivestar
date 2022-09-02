<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
            "student_id",
            "status",
            ];


    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    public function section()
    {
        return $this->belongsToMany(Section::class);
    }
}
