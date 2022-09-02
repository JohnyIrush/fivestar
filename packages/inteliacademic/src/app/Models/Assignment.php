<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
            "level_id",
            "assignment",
            "start_date",
            "end_date",
            "deadline",
            "status",
    ];

    public function section()
    {
        return $this->belongsToMany(Section::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
