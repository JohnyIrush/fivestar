<?php

namespace Softwarescares\Intelistaff\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliinventory\app\Models\Hostel;

class Teacher extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }


    public function streams()
    {
       return  $this->belongsToMany(Stream::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get all of the sections for the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function sections(): HasManyThrough
    {
        return $this->hasManyThrough(Section::class, Level::class);
    }

    public function hostel()
    {
        return $this->hasOne(Hostel::class);
    }

    public function section()
    {
        return $this->hasOne(Section::class);
    }

}
