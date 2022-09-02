<?php

namespace Softwarescares\Inteliacademic\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;


    protected $fillable = [
        "sport",
        "icon_path",
        "status",
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
