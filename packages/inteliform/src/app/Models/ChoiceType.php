<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceType extends Model
{
    use HasFactory;

    public function choiceType()
    {
        return $this->belongsTo(ChoiceType::class);
    }
}
