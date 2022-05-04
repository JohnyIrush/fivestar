<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Intelitimetable\app\Models\Venue;

class Subject extends Model
{
    use HasFactory;

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
}
