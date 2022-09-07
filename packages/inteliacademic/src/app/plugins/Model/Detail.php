<?php

namespace Softwarescares\Inteliacademic\app\plugins\Model;

use Illuminate\Database\Eloquent\Model;

use Softwarescares\Intelilibrary\app\Plugins\Model\Table;

class Detail
{
    public function detail(Model $model, array $conditions, string $label, string $icon, array $visible, array $types)
    {
        return [
         "label" => $label, 
         "details" => $model::where($conditions)->get(),
         "visible" => $visible,
         "icon" => $icon,
         "types" => $types,
         "columns" => (new Table())->column($model)
        ];
    }
}