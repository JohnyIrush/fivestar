<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'description',
        'sections'
        
    ];

    public function forms()
    {
        return $this->hasMany(Form::class);
    }

    public function formSetting()
    {
        return $this->belongsTo(FormSetting::class);
    }

    public function formSections()
    {
        return $this->hasMany(FormSection::class);
    }
}
