<?php

namespace Softwarescares\Inteliportal\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "firstname",
        "lastname",
        "bio",
        "gender_id",

        "address",
        "city_id",
        "town_id",

        "title",
        "type"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
