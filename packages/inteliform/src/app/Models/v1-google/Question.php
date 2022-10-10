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

    public function choiceQuestion()
    {
        return $this->hasOne(ChoiceQuestion::class);
    }

    public function scaleQuestion()
    {
        return $this->hasOne(ScaleQuestion::class);
    }

    public function dateQuestion()
    {
        return $this->hasOne(DateQuestion::class);
    }

    public function timeQuestion()
    {
        return $this->hasOne(TimeQuestion::class);
    }

    public function fileUploadQuestion()
    {
        return $this->hasOne(FileUploadQuestion::class);
    }

    public function questionGroupItem()
    {
        return $this->belongsTo(QuestionGroupItem::class);
    }
}
