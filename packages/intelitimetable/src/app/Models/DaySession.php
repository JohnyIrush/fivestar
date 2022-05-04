<?php

namespace Softwarescares\Intelitimetable\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaySession extends Model
{
    use HasFactory;

    public function day()
    {
        return $this->belongsToMany(Day::class);
    }
}
