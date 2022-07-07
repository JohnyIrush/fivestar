<?php

namespace Softwarescares\Inteliinstaller\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
    use HasFactory;

    /**
     * The inteli that belong to the Feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function intelis(): BelongsToMany
    {
        return $this->belongsToMany(Inteli::class);
    }
}
