<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alignment extends Model
{
    use HasFactory;

    public function mediaProperty()
    {
        return $this->belongsTo(MediaProperty::class);
    }

    public function alignmentType()
    {
        return $this->belongsTo(AlignmentType::class);
    }
}
