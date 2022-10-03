<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionGroupItem extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function grid()
    {
        return $this->hasOne(Grid::class);
    }
}
