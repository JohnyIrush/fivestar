<?php

namespace Softwarescares\Inteliportal\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Softwarescares\Inteliacademic\app\Models\Club;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\LevelStream;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliacademic\app\Models\Sport;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Intelifinance\app\Models\Account;
use Softwarescares\Inteliinventory\app\Models\Hostel;
use Softwarescares\Intelistaff\app\Models\Teacher;

class Student extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stream()
    {
        return $this->belongsTo(Stream::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function master()
    {
        return $this->hasOneThrough(Teacher::class, Hostel::class,"teacher_id","id");
    }

    public function classteacher()
    {
        return $this->hasOneThrough(Teacher::class, Section::class,"teacher_id","id");
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function sports()
    {
        return $this->belongsToMany(Sport::class);
    }

    public function clubs()
    {
        return $this->belongsToMany(Club::class);
    }

    public function account()
    {
        return $this->hasOneThrough(Account::class, User::class, "id", "user_id");
    }

    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

}
