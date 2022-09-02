<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Intelistaff\app\Models\Department;
use Softwarescares\Intelistaff\app\Models\Teacher;
use Softwarescares\Intelitimetable\app\Models\Venue;

class Subject extends Model
{
    use HasFactory;

    protected $fillable =[
        "subject",
        "lessons",
        "duration",
        "status"
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function department()
    {
        return $this->belongsToMany(Department::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function venue()
    {
        return $this->hasOne(Venue::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
