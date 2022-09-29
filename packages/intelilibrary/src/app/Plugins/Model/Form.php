<?php

namespace Softwarescares\Intelilibrary\app\Plugins\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Builder;

use DB;

class Form
{
	/**
	 * $options - options for option fields eg(select boxes, check boxes, radio inputs)
	 * $hidden - hidden form fields(not required eg id)
	 * $crud - resource api routes
	 * $more - extra fields not in the model, for example if model has many to many relationship we would need check boxes of related models  
	 * */
	public function form(Model $model, array $options, array $hidden,Array $crud, array $more = [])
	{
		$fields = [];
		$this->fields($model, $fields);
		$fields = array_merge($fields, $more);
		
    return [$fields, $options, $hidden, $crud];
	}


  /**
   * $fields - processed fields to be returned
   * $only - names of fields that should only be returned - depricated
   * $except - names of fields in the joined table that should not be returned
   * */

	public function fields(Model $model, array &$fields, array $only = [], array $except = [])
	{
		
    $table = $model->getTable();
		$columns = DB::select('describe ' . $table);

		foreach ($columns as $field)
		{
			  if(/*empty($only) || in_array($field->Field, $only) &&*/ !in_array($field->Field, $except))
			  {
          array_push($fields, [
            'field' => $field->Field,
            'type' => $field->Type
          ]);
        }
		}
	}
}


