<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Intelistaff\app\Models\Teacher;
use Softwarescares\Intelitimetable\app\Models\Venue;

class Section extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Section
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venue()
    {
        return $this->hasOne(Venue::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }


}
