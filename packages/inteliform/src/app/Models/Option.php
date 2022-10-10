<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_id',
        'key',
        'value',
        'image'
    ];

    public function field()
    {
        $this->belongsTo(Field::class);
    }
}
