<?php

namespace Softwarescares\Inteliinstaller\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        return $this->hasOne(User::class);
    }

    /**
     * Get the InteliApp associated with the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inteliApp(): HasOne
    {
        return $this->hasOne(InteliApp::class);
    }
}
