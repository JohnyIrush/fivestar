<?php

namespace Softwarescares\Intelistaff\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliinventory\app\Models\Inventory;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        "icon",
        "department"
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function inventory()
    {
        return $this->belongsToMany(Inventory::class);
    }
}
