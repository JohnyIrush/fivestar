<?php

namespace Softwarescares\Inteliinventory\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Softwarescares\Intelistaff\app\Models\Department;

class Inventory extends Model
{
    use HasFactory;


    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function department()
    {
        return $this->belongsToMany(Department::class);
    }
}
