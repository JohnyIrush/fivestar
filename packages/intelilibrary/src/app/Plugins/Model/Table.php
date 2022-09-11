<?php

namespace Softwarescares\Intelilibrary\app\Plugins\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Builder;

use DB;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;

class Table
{
  public $form;

  public function __construct()
  {
    $this->form = new Form();
  }

  public function table(Model $model, $entries, array $more, array $extra, array $types, array $crud, array $hidden = [])
  {

    $columns = [];

    $this->form->fields($model, $columns);

  	return [
       "hidden" => $hidden,
  		 "columns" => array_merge($columns,$extra),
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


