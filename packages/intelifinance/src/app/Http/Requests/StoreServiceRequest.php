<?php

namespace Softwarescares\Intelifinance\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            "icon" => "required|string",
            "service" => "required|string",
            "price" => "required|integer",
            "description" => "required|string",
            "status" => "required",
        ];
    }
}
