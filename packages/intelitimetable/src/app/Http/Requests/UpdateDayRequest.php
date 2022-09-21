<?php

namespace Softwarescares\Intelitimetable\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDayRequest extends FormRequest
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
        "day" => "required|string",
        "start" => "required",
        "end" => "required",
        "status" => "required"
        ];
    }
}
