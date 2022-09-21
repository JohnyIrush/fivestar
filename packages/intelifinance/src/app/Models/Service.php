<?php

namespace Softwarescares\Intelifinance\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
            "icon",
            "service",
            "price",
            "description",
            "status",
    ];

    public function fee()
    {
        return $this->belongsToMany(Fee::class);
    }
}
