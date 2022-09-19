<?php

namespace Softwarescares\Intelistaff\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    protected $fillable = [
        "occupation",
        "salary",
        "icon"
    ];
}
