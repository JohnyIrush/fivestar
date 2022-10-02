<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;


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
}
