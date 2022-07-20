<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Softwarescares\Intelifinance\app\Models\Account;
use Softwarescares\Intelifinance\app\Models\Deposit;
use Softwarescares\Intelifinance\app\Models\Payment;
use Softwarescares\Intelifinance\app\Models\Withdraw;
use Softwarescares\Inteliportal\app\Models\Guardian;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Intelistaff\app\Models\Staff;
use SoftwaresCares\Inteliteam\app\Models\Task;

use Spatie\Permission\Traits\HasPermissions;

use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }

    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function withdrawals()
    {
        return $this->hasManyThrough(Withdraw::class, Account::class);
    }

    public function deposits()
    {
        return $this->hasManyThrough(Deposit::class, Account::class);
    }

    public function payments()
    {
        return $this->hasManyThrough(Payment::class, Account::class);
    }
}
