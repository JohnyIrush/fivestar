<?php

namespace Softwarescares\Inteliexam\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGradeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "grade" => "required|string",
            "min_marks" => "required|integer",
            "max_marks" => "required|integer",
            "points" => "required|integer",
            "status" => "required",
        ];
    }
}
