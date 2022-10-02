<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function questionItem()
    {
        return $this->hasOne(QuestionItem::class);
    }
}
