<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliportal\app\Models\Student;

class Club extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

}
