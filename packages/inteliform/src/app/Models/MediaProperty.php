<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaProperty extends Model
{
    use HasFactory;

    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function alignment()
    {
        return $this->hasOne(Alignment::class);
    }
}
