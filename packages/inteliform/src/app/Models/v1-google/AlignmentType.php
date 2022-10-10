<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlignmentType extends Model
{
    use HasFactory;

    public function alignments()
    {
        return $this->belongsToMany(Alignment::class);
    }
}
