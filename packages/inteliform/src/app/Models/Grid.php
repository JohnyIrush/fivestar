<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    use HasFactory;

    public function questionGroupItem()
    {
        return $this->belongsTo(QuestionGroupItem::class);
    }

    public function choiceQuestion()
    {
        return $this->hasMany(ChoiceQuestion::class);
    }
}
