<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSetting extends Model
{
    use HasFactory;

    public function formTemplate()
    {
        return $this->hasOne(FormTemplate::class);
    }

   /* v1 -google
    public function quizSetting()
    {
        return $this->hasOne(QuizSetting::class);
    }
   */  
}
