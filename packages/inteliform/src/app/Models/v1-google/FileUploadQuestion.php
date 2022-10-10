<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUploadQuestion extends Model
{
    use HasFactory;

    public function question()
    {
        $this->belongsTo(Question::class); 
    }
}
