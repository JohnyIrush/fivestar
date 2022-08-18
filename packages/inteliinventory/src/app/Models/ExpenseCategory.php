<?php

namespace Softwarescares\Inteliinventory\app\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    public function expense()
    {
        return $this->hasMany(Expense::class);
    }
}
