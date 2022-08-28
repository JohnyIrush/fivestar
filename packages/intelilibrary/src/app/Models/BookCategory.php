<?php

namespace Softwarescares\Intelilibrary\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [
     "image",
     "category",
     "description",
     "status",
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
