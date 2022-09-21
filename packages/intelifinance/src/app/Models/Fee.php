<?php

namespace Softwarescares\Intelifinance\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Softwarescares\Intelitimetable\app\Models\Term;
use Softwarescares\Inteliacademic\app\Models\Level;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
            "fee",
            "description",
            "level_id",
            "term_id",
            "status",
        ];

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
