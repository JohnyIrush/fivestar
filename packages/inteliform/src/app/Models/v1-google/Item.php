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

    public function imageItem()
    {
        return $this->hasOne(ImageItem::class);
    }

    public function videoItem()
    {
        return $this->hasOne(VideoItem::class);
    }
}
