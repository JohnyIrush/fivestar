<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Softwarescares\Inteliportal\app\Models\Student;
use App\Models\User;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
            "student_id",
            "status",
            ];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }


   /*
    public function user()
    {
        return $this->hasOneThrough(User::class,Student::class);
    }*/

}
