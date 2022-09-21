<?php

namespace Softwarescares\Intelitimetable\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Softwarescares\Inteliacademic\app\Models\Level;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
            "venue",
            "location",
            'section_id',
            'subject_id',
            'status',
    ];

    
    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function streams()
    {
        return $this->belongsToMany(Streams::class);
    }

}
