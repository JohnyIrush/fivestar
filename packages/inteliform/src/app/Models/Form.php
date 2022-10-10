<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

 /* Google Forms Api structure not usefull
    public function formInfo()
    {
        return $this->hasOne(FormInfo::class);
    }

    public function formSetting()
    {
        return $this->hasOne(FormSetting::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
 */ 
    public function formTemplate()
    {
        return $this->belongsTo(FormTemplate::class);
    }

    public function formSections()
    {
        return $this->hasManyThrough(
                      FormSection::class,
                      FormTemplate::class);
    }

    public function formSetting()
    {
        return $this->hasOneThrough(
                      FormSetting::class,
                      FormTemplate::class);
    }

}
