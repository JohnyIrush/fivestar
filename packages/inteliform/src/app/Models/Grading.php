<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grading extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function correctAnswer()
    {
        return $this->hasMany(CorrectAnswer::class);
    }
}
