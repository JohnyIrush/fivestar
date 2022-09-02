<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Intelistaff\app\Models\Teacher;
use Softwarescares\Intelitimetable\app\Models\Venue;

class Stream extends Model
{
    use HasFactory;


    protected $fillable = [
        "stream",
        "status"
    ];

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function venues()
    {
        $this->hasMany(Venue::class);
    }

    public function teachers()
    {
        $this->hasMany(Teacher::class);
    }

    public function venue()
    {
        $this->hasOne(Venue::class);
    }
}
