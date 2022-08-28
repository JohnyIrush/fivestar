<?php

namespace Softwarescares\Intelilibrary\app\Plugins\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Builder;

use DB;

class Card
{

  public $table;

  public function __construct(Table $table)
  {
    $this->table = $table;
  }

  public function card(Model $model, $entries, array $visible,array $types)
  {

  	return [
  		 "columns" => array_merge($this->table->column($model)),
  		 "entries" => $entries,
  		 "visible" => $visible,
  		 "types" => $types
  	];
  }

}


