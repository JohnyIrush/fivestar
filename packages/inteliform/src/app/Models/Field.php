<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_section_id',
        'title',
        'image',
        'description',
        'name',
        'value'
    ];

    public function formSection()
    {
        return $this->belongsTo(FormSection::class);
    }

    public function fieldSettings()
    {
        return $this->hasMany(FieldSetting::class);
    }

    public function options()
    {
        $this->hasMany(Option::class);
    }
}
