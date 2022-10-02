<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSetting extends Model
{
    use HasFactory;

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function quizSetting()
    {
        return $this->hasOne(QuizSetting::class);
    }
}
