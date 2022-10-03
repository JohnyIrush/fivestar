<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceQuestion extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function choiceType()
    {
        return $this->hasOne(ChoiceType::class);
    }

    public function grid()
    {
        return $this->belongsTo(Grid::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
