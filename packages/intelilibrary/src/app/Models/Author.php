<?php

namespace Softwarescares\Intelilibrary\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
     "profile_photo_path",
     "firstname",
     "lastname",
     "email",
     "phone",
     "status",
     "dob",
     "address",
     "website"
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
