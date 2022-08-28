<?php

namespace Softwarescares\Intelilibrary\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Intelilibrary\app\Models\Book;

use App\Models\User;

class BookIssue extends Model
{
    use HasFactory;

    protected $fillable = [
     "student_id",
     "book_id",
     "issue_date",
     "return_date",
     "return_status",
    ];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }


}
