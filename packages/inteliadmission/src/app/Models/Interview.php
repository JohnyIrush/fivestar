<?php

namespace Softwarescares\Inteliadmission\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Softwarescares\Inteligoogle\app\Models\GoogleForm;

class Interview extends Model
{
    use HasFactory;

    public function googleForms()
    {
        return $this->belongsToMany(GoogleForm::class);
    }
}
