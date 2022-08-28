<?php

namespace Softwarescares\Intelilibrary\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
    "book_category_id",
    "title",
    "title_long",
    "isbn",
    "isbn13",
    "dewey_decimal_id",
    "binding_id",
    "language_id",
    "date_published",
    "edition",
    "pages",
    "dimensions",
    "overview",
    "image",
    "msrp",
    "price",
    "excerpt",
    "synopsys",
    "no_of_copies",
    "volume",
    "status"
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class);
    }

    public function bookCategory()
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function binding()
    {
        return $this->belongsTo(Binding::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function deweyDecimal()
    {
        return $this->belongsTo(DeweyDecimal::class);
    }
}
