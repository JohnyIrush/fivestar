<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScaleQuestion extends Model
{
    use HasFactory;
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
