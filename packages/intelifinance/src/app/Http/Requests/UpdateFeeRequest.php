<?php

namespace Softwarescares\Intelifinance\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeeRequest extends FormRequest
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
            "fee" => "required|string",
            "description" => "required|string",
            "level_id" => "required|integer",
            "term_id" => "required|integer",
            "status" => "required",
        ];
    }
}
