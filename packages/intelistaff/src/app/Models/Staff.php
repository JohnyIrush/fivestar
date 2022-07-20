<?php

namespace Softwarescares\Intelistaff\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliportal\app\Models\Gender;

class Staff extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
        # Softwarescares\Intelistaff\app\Models\Teacher::all()
    }

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
