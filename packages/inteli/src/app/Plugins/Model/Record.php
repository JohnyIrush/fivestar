<?php

namespace Softwarescares\Inteli\app\Plugins\Model;

use Illuminate\Database\Eloquent\Model;

class Record
{
	
	public function lastRecord(Model $model)
	{
		return $model::orderby('id', 'DESC')->first();
	}



}