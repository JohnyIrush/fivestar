<?php

namespace Softwarescares\Inteliexam\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
            "cover",
            "exam",
            "level_id", 
            "term_id",
            "start_date",
            "end_date", 
    ];
}
