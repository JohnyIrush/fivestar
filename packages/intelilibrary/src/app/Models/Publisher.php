<?php

namespace Softwarescares\Intelilibrary\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
              "publisher",
              "avatar",
              "address",
              "phone",
              "email",
              "website"
        ];



    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
