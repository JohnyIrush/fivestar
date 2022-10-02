<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    use HasFactory;

    public function grading()
    {
        return $this->belongsTo(Grading::class);
    }
}
