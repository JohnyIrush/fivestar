<?php

namespace Softwarescares\Inteliexam\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
            "grade",
            "min_marks",
            "max_marks",
            "points",
            "status"
            ];
}
