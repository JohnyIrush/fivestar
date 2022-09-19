<?php

namespace Softwarescares\Intelistaff\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
            "user_id" => "required|integer",
            "firstname" => "required|string",
            "lastname" => "required|string",
            "bio" => "required|string",
            "career" => "required|string",
            "gender_id" => "required|integer",
            "address" => "required|string",
            "title" => "required|string",
            "type" => "required|string",
            "category_id" => "required|integer",
            "occupation_id" => "required|integer"
        ];
    }
}
