<?php

namespace Softwarescares\Inteliinventory\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Intelistaff\app\Models\Teacher;

class Hostel extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
