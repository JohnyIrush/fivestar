<?php

namespace Softwarescares\Inteli\app\Actions\Model;

use Illuminate\Database\Eloquent\Model;

class Update
{
	public function update($request, Model $model, $conditions)
	{
        return $model::where($conditions)
                     ->update($request->all());
	}
}


