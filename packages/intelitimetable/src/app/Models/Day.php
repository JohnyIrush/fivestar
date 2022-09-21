<?php

namespace Softwarescares\Intelitimetable\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        "day",
        "start",
        "end",
        "status"
    ];

    public function daySession()
    {
        return $this->belongsToMany(DaySession::class);
    }
}
