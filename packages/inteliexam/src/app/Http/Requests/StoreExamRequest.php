<?php

namespace Softwarescares\Inteliexam\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamRequest extends FormRequest
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
            "cover" => "required|string",
            "exam" => "required|string",
            "level_id" => "required|integer", 
            "term_id" => "required|integer",
            "start_date" => "required|date",
            "end_date" => "required|date", 
        ];
    }
}
