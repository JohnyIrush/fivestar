<?php

namespace Softwarescares\Intelilibrary\app\Plugins\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Builder;

use DB;

class Form
{
	public function form(Model $model, array $options, array $hidden,Array $crud)
	{
		$fields = [];
		$this->fields($model, $fields);
		
    return [$fields, $options, $hidden, $crud];
	}


	public function fields(Model $model, array &$fields)
	{
		
    $table = $model->getTable();
		$columns = DB::select('describe ' . $table);;

		foreach ($columns as $field)
		{
          array_push($fields, [
            'field' => $field->Field,
            'type' => $field->Type
          ]);
		}
	}
}


