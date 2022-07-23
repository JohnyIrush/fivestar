<?php

namespace Softwarescares\Inteliportal\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Softwarescares\Inteliacademic\app\Models\Club;
use Softwarescares\Inteliacademic\app\Models\Sport;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Intelifinance\app\Models\Account;
use Softwarescares\Inteliinstaller\app\Models\Inteli;

class School extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the InteliApp associated with the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inteli(): HasOne
    {
        return $this->hasOne(Inteli::class);
    }

    public function clubs()
    {
        return $this->belongsToMany(Club::class);
    }

    public function sports()
    {
        return $this->belongsToMany(Sport::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function schoolGender()
    {
        return $this->belongsTo(SchoolGender::class);
    }

    public function schoolEducationSystem()
    {
        return $this->belongsTo(SchoolEducationSystem::class);
    }

    public function schoolLevel()
    {
        return $this->belongsTo(SchoolLevel::class);
    }

    public function schoolType()
    {
        return $this->belongsTo(SchoolTypes::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

}
