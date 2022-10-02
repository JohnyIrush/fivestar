<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSetting extends Model
{
    use HasFactory;

    public function formSetting()
    {
        return $this->belongsTo(FormSetting::class);
    }
}
