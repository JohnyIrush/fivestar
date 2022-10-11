<?php

namespace Softwarescares\Inteliform\app\plugins\Model;

use Illuminate\Database\Eloquent\Model;

class Record
{
	
	public function lastRecord(Model $model)
	{
		return $model::orderby('id', 'DESC')->first();
	}



}