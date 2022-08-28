<?php

namespace Softwarescares\Intelilibrary\app\Actions\Model;

use Illuminate\Database\Eloquent\Model;

class Delete
{
	public function delete($request, Model $model, $conditions)
	{
        return $model::where($conditions)
                     ->delete();
	}
}


