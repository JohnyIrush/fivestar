<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionItem extends Model
{
    use HasFactory;

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
