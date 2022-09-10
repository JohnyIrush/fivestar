<?php

namespace Softwarescares\Intelilibrary\app\Plugins\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Builder;

use DB;

class Table
{

  public function __construct()
  {

  }

  public function table(Model $model, $entries, array $more, array $extra, array $types, array $crud, array $hidden = [])
  {

  	return [
       "hidden" => $hidden,
  		 "columns" => array_merge($this->column($model),$extra),
  		 "entries" => $entries,
  		 "more" => $more,
  		 "types" => $types,
       "crud" => $crud,
  	];
  }

	public function column(Model $model)
	{		
		$columns = Schema::getColumnListing($model->getTable());

    return $columns;
	}
}


