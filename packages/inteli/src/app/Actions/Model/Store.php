<?php

namespace Softwarescares\Inteli\app\Actions\Model;

use Illuminate\Database\Eloquent\Model;

class Store
{
	public function store($request, Model $model)
	{
        return $model::create($request->all());
	}
}


