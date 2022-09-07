<?php

namespace Softwarescares\Inteliacademic\app\plugins\Model;

use Illuminate\Database\Eloquent\Model;

class Statistic
{
    public function statistic(Model $model, array $conditions, string $label, string $description, string $icon)
    {
        return [
         "label" => $label, 
         "total" => $model::where($conditions)->count(),
         "description" => $description, 
         "icon" => $icon
        ];
    }
}