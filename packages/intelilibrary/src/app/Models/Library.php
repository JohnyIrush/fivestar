<?php

namespace Softwarescares\Intelilibrary\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = [
            'library',
            'location',
        ];
}
