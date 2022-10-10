<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_id',
        'key',
        'value'
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
