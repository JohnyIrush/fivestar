<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function questionItem()
    {
        return $this->belongsTo(QuestionItem::class);
    }

    public function grading()
    {
        return $this->hasOne(Grading::class);
    }

    public function questionChoice()
    {
        return $this->hasOne(QuestionChoice::class);
    }

    public function dateQuestion()
    {
        return $this->hasOne(DateQuestion::class);
    }

    public function questionGroupItem()
    {
        return $this->belongsTo(QuestionGroupItem::class);
    }
}
