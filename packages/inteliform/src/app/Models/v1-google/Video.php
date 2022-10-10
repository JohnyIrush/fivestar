<?php

namespace Softwarescares\Inteliform\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function videoItem()
    {
        return $this->belongsTo(VideoItem::class);
    }

    public function mediaProperty()
    {
       return $this->belongsTo(MediaProperty::class); 
    }
}
