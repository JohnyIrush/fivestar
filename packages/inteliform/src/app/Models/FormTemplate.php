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
        'sections',
        "image"
        
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


    public function getImageAttribute($value)
    {
        return base64_decode($value);
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = base64_encode($value);
    }

    public function getSectionsAttribute($value)
    {
        return json_decode($value);
    }
}
