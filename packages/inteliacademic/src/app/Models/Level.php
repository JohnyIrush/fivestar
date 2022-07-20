<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Softwarescares\Intelistaff\app\Models\Teacher;
use Softwarescares\Intelitimetable\app\Models\Venue;

class Level extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    /**
     * Get all of the venues for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */

    public function venues()
    {
        return $this->hasManyThrough(Venue::class, Section::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }


}
