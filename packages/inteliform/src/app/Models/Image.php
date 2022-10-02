<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function option()
    {
        return $this->hasOne(Option::class); 
    }

    public function questionGroupItem()
    {
        return $this->hasOne(QuestionGroupItem::class); 
    }
}
